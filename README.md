# ERP-La-Pradera
Sistema de Gestión ERP/Fiscal para "La Pradera"
---

### **Especificación de Proyecto: Sistema de Gestión ERP/Fiscal para "La Pradera"**

**Versión:** 1.1
**Fecha:** 13 de Noviembre de 2025
**Autor:** Gemini Polyglot ERP Architect (GPEA)
**Stakeholder:** Ricardo (Ingeniero de Software)

---

#### **1. Resumen Ejecutivo**

(Sin cambios)

#### **2. Glosario de Términos Clave**

(Sin cambios)

#### **3. Arquitectura Técnica**

El sistema se orquestará mediante `docker-compose` y constará de los siguientes contenedores comunicados a través de una red interna de Docker.

**Diagrama de Arquitectura Revisado:**
```
      +--------------------------------+
      |        NAS Synology (Host)     |
      |   - Repositorio GitHub         |
      |   - Fichero Glop.fdb           |
      |   - Volumen de datos MySQL     |
      +--------------------------------+
                    | (Volúmenes y Red Docker)
                    v
      +-------------------------------------------------------------+
      |                 Red Interna de Docker "pradera_net"         |
      |                                                             |
      |  +---------------------+      API      +------------------+  |
      |  | facturascripts-app  |<------------->|   ocr-service    |  |
      |  |  (PHP, Nginx)       |               |  (Python, Flask) |  |
      |  +---------------------+               +------------------+  |
      |      |           ^                                          |
      | (SQL)|           |(Conexión de red Firebird)                 |
      |      v           |                                          |
      |  +---------------------+      +--------------------------+  |
      |  |   mysql-db          |<---- |      firebird-db         |  |
      |  |  (MySQL)            |      |     (Firebird Server)    |  |
      |  +---------------------+      +--------------------------+  |
      +-------------------------------------------------------------+
```

*   **Contenedor 1: `facturascripts-app`**
    *   **Base:** Imagen de PHP-FPM + Nginx/Apache.
    *   **Contenido:** Core de FacturaScripts y los plugins personalizados.
    *   **Función Clave del Flujo Final:** Tras la confirmación del plan fiscal en el simulador, este contenedor ejecuta la lógica de importación desde Glop y, como paso final, **crea las correspondientes Facturas Simplificadas en su base de datos.** Estas facturas se generan cumpliendo el formato necesario para que el plugin de **Veri\*factu** pueda procesarlas y enviarlas a la AEAT.
    *   **Plugins:** `plugin_importador_compras`, `plugin_gastos_manuales`, `plugin_conector_glop`, `plugin_registro_diario_real`, `plugin_simulador_fiscal`, `plugin_informe_rentabilidad`.

*   **Contenedor 2: `ocr-service`**
    *   **Base:** Imagen de Python (Flask/FastAPI).
    *   **Contenido:** Librería `invoice2data` y una API REST para procesar PDFs de facturas.

*   **Contenedor 3: `mysql-db`**
    *   **Base:** Imagen oficial de **MySQL** (o MariaDB).
    *   **Contenido:** Será la base de datos principal para FacturaScripts. **Nuestros plugins personalizados añadirán a esta base de datos las tablas y columnas necesarias** para soportar la lógica de negocio del proyecto (registros de ventas reales, marcadores de gastos deducibles, etc.).

*   **Contenedor 4: `firebird-db`**
    *   **Base:** Imagen de un servidor Firebird (ej. `jacobalberty/firebird`).
    *   **Contenido:** Este contenedor ejecuta el motor de base de datos Firebird. Su único propósito es **servir la base de datos del TPV (`Glop.fdb`)**.
    *   **Configuración:** Se montará un volumen desde el NAS Synology al contenedor, apuntando al fichero `Glop.fdb`, para que el servidor Firebird pueda leerlo y servirlo a través de la red interna de Docker. El contenedor `facturascripts-app` se conectará a este como un cliente de red.

#### **4. Descripción de Componentes y Flujos de Trabajo**

**4.1. Recopilación de Datos (Acciones Continuas)**

(Sin cambios)

**4.2. El Simulador Fiscal Interactivo (Acción Periódica)**

1.  **Fase de Simulación:** (Sin cambios)

2.  **Fase de Validación y Ajuste:** (Sin cambios)

3.  **Fase de Ejecución:**
    *   Una vez el plan está validado y confirmado por el usuario, este pulsa "Confirmar y Generar".
    *   El sistema recorre el plan final, día por día.
    *   Para cada día, se conecta a la base de datos servida por el contenedor `firebird-db` y ejecuta el algoritmo de selección de tickets reales.
    *   Se realiza una **importación masiva** de todos los tickets seleccionados.
    *   Como resultado de esta importación, se **crean las Facturas Simplificadas correspondientes dentro de FacturaScripts**. Estas facturas son el registro oficial de los ingresos declarados.
    *   Finalmente, estas Facturas Simplificadas recién creadas quedan listas para ser procesadas y enviadas a la AEAT a través del plugin **Veri\*factu**.

**4.3. Informes de Inteligencia de Negocio**

(Sin cambios)

#### **5. Stack Tecnológico**

*   **Backend:** PHP (FacturaScripts), Python (Servicio OCR).
*   **Base de Datos Principal:** **MySQL** (MariaDB).
*   **Base de Datos TPV:** **Firebird** (servida en contenedor).
*   **Contenerización:** Docker, Docker Compose.
*   **Entorno:** Synology NAS.
*   **Control de Versiones:** Git, GitHub.

---
