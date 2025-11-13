# ERP-La-Pradera
Sistema de Gestión ERP/Fiscal para "La Pradera"
---

### **Especificación de Proyecto: Sistema de Gestión ERP/Fiscal para "La Pradera"**

**Versión:** 1.0
**Fecha:** 13 de Noviembre de 2025
**Autor:** Gemini Polyglot ERP Architect (GPEA)
**Stakeholder:** Ricardo (Ingeniero de Software)

---

#### **1. Resumen Ejecutivo**

Este documento define el diseño y la arquitectura de un sistema de gestión empresarial (ERP) y optimización fiscal a medida para el Bar-Restaurante "La Pradera". El sistema se construirá sobre la base del software de código abierto **FacturaScripts**, extendiendo su funcionalidad a través de un conjunto de plugins personalizados.

El objetivo principal es doble:
1.  **Optimización Fiscal:** Proveer una herramienta de simulación inteligente que ayude a decidir la cantidad de ingresos en efectivo a declarar, basándose en gastos deducibles y un margen de beneficio deseado, justificando dicha declaración con transacciones reales del TPV existente.
2.  **Inteligencia de Negocio:** Mantener un sistema de contabilidad dual (Fiscal vs. Real) para obtener una visión precisa de la rentabilidad total del negocio, incluyendo ingresos y gastos no declarados.

El sistema se desplegará en un entorno de contenedores **Docker** sobre un **NAS Synology**, utilizando un flujo de trabajo basado en **GitHub**.

#### **2. Glosario de Términos Clave**

*   **Ventas TPV GLOP:** Total de ventas registradas en la base de datos Firebird (`Glop.fdb`) del TPV. No representa la realidad económica total.
*   **Ventas Reales:** Ingresos totales reales del negocio, introducidos manualmente por el usuario a diario. Se dividen en `Ventas reales por tarjeta` y `Ventas reales efectivo`.
*   **Ingresos Declarados:** La porción de las *Ventas Reales* que se decide declarar a la Agencia Tributaria (AEAT). Se componen del total de `Ventas reales por tarjeta` más una porción calculada de las `Ventas reales efectivo`.
*   **Gasto Deducible (o Justificable):** Gasto respaldado por una factura oficial que puede ser utilizado en el cálculo fiscal para deducir impuestos.
*   **Gasto Real (o No Deducible):** Gasto real del negocio que no cuenta con factura oficial (ej: pan, horas extras) y no puede ser usado en el cálculo fiscal, pero es necesario para calcular la rentabilidad real.

#### **3. Arquitectura Técnica**

El sistema se orquestará mediante `docker-compose` y constará de los siguientes contenedores comunicados a través de una red interna de Docker.

```
      +--------------------------------+
      |        NAS Synology (Host)     |
      |   - Repositorio GitHub         |
      |   - Fichero Glop.fdb           |
      |   - Volumen de datos de BBDD   |
      +--------------------------------+
                    | (Volúmenes y Red Docker)
                    v
      +-------------------------------------------------------------+
      |                 Red Interna de Docker "pradera_net"         |
      |                                                             |
      |  +---------------------+      API      +------------------+  |
      |  | facturascripts-app  |<------------->|   ocr-service    |  |
      |  |  (PHP, Apache)      |               |  (Python, Flask) |  |
      |  +---------------------+               +------------------+  |
      |      |           ^                                          |
      | (SQL)|           |(Conexión Firebird vía Volumen)           |
      |      v           |                                          |
      |  +---------------------+                                    |
      |  | facturascripts-db   |                                    |
      |  |  (PostgreSQL/MySQL) |                                    |
      |  +---------------------+                                    |
      +-------------------------------------------------------------+
```

*   **Contenedor 1: `facturascripts-app`**
    *   **Base:** Imagen de PHP-FPM + Nginx/Apache.
    *   **Contenido:** Core de FacturaScripts y los siguientes plugins personalizados:
        *   `plugin_importador_compras`: Gestiona la subida de facturas PDF y la comunicación con el `ocr-service`. Marca las compras como **deducibles** por defecto.
        *   `plugin_gastos_manuales`: Interfaz para registrar rápidamente gastos **no deducibles**.
        *   `plugin_conector_glop`: Proporciona la lógica para leer la base de datos `Glop.fdb`.
        *   `plugin_registro_diario_real`: Formulario para la entrada diaria de `Ventas reales por tarjeta` y `Ventas reales efectivo`.
        *   `plugin_simulador_fiscal`: El cerebro del sistema. La herramienta de simulación y justificación fiscal.
        *   `plugin_informe_rentabilidad`: Genera el informe comparativo Fiscal vs. Real.

*   **Contenedor 2: `ocr-service`**
    *   **Base:** Imagen de Python (Flask/FastAPI).
    *   **Contenido:** Librería `invoice2data` y una API REST que expone un endpoint para procesar PDFs de facturas y devolver un JSON estructurado. Incluirá una interfaz para la gestión de plantillas por proveedor.

*   **Contenedor 3: `facturascripts-db`**
    *   **Base:** Imagen oficial de PostgreSQL (preferido) o MariaDB.
    *   **Contenido:** Base de datos principal de FacturaScripts.

#### **4. Descripción de Componentes y Flujos de Trabajo**

**4.1. Recopilación de Datos (Acciones Continuas)**

1.  **Registro de Gastos:**
    *   **Deducibles:** El usuario sube una factura en PDF al `plugin_importador_compras`. El sistema la procesa vía `ocr-service` y crea una factura de compra marcada como `es_deducible=true`.
    *   **No Deducibles:** El usuario registra gastos sin factura en el `plugin_gastos_manuales`. Estos se guardan con la marca `es_deducible=false`.

2.  **Registro de Ingresos Reales:**
    *   Diariamente, el usuario utiliza el `plugin_registro_diario_real` para introducir dos cifras: `Ventas reales por tarjeta` y `Ventas reales efectivo`.

**4.2. El Simulador Fiscal Interactivo (Acción Periódica)**

Esta es la herramienta central para la planificación fiscal mensual/trimestral.

1.  **Fase de Simulación:**
    *   El usuario introduce un **Margen de Beneficio Neto Deseado (%)**.
    *   Al pulsar "Calcular", el sistema:
        *   Suma todos los **Gastos Deducibles** del período.
        *   Suma todas las **Ventas reales por tarjeta** del período.
        *   Calcula el **Total de Efectivo a Declarar** necesario para alcanzar el margen de beneficio deseado sobre los gastos deducibles.
        *   Distribuye esta cifra de efectivo entre los días del período de forma proporcional a la actividad registrada en el TPV.

2.  **Fase de Validación y Ajuste:**
    *   Se presenta una tabla interactiva con el plan propuesto.
    *   Para cada día, el sistema comprueba que el `Total Declarado Propuesto` (Tarjeta + Efectivo Declarado) sea **menor o igual** a las `Ventas TPV GLOP totales` de ese día.
    *   Si un día no cumple la restricción, se marca con un **Warning (⚠️)**.
    *   El usuario puede **editar la cifra de "Declarado Efectivo"** de cualquier día para resolver los warnings o ajustar el plan a su criterio.
    *   El usuario puede cambiar el margen de beneficio y **re-simular** el plan cuantas veces necesite hasta encontrar un escenario óptimo.

3.  **Fase de Ejecución:**
    *   Una vez el plan está validado (sin warnings) y confirmado por el usuario, este pulsa "Confirmar y Generar".
    *   El sistema recorre el plan final, día por día.
    *   Para cada día, se conecta a `Glop.fdb` y ejecuta un algoritmo de selección de tickets reales:
        1.  Selecciona tickets de **tarjeta** hasta acercarse al objetivo de tarjeta.
        2.  Selecciona tickets de **efectivo** hasta acercarse al objetivo de efectivo.
        3.  El sumatorio total de tickets seleccionados para un día nunca superará el `Total Declarado` para ese día.
    *   Se realiza una **importación masiva** de todos los tickets seleccionados de todo el período, creándolos como facturas simplificadas en FacturaScripts.
    *   Estas facturas son las únicas que se enviarán a la AEAT a través del plugin **Veri\*factu**.

**4.3. Informes de Inteligencia de Negocio**

*   El `plugin_informe_rentabilidad` utilizará todos los datos recopilados para presentar un informe claro que compare la Contabilidad Fiscal (declarada) con la Contabilidad Real (total), mostrando el beneficio real del negocio.

#### **5. Stack Tecnológico**

*   **Backend:** PHP (FacturaScripts), Python (Servicio OCR).
*   **Base de Datos Principal:** PostgreSQL / MySQL (MariaDB).
*   **Base de Datos TPV:** Firebird.
*   **Contenerización:** Docker, Docker Compose.
*   **Entorno:** Synology NAS.
*   **Control de Versiones:** Git, GitHub.

---
