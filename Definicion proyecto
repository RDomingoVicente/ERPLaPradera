# Sistema de Gestión ERP/Fiscal para "La Pradera"

![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)![Status: In Development](https://img.shields.io/badge/status-in%20development-blue)

Este repositorio contiene el código fuente para un sistema de gestión empresarial (ERP) y optimización fiscal a medida para el Bar-Restaurante "La Pradera". 
El sistema está construido sobre el software de código abierto [FacturaScripts](https://facturascripts.com/) y 
extendido a través de un ecosistema de plugins personalizados y servicios contenerizados.

## Tabla de Contenidos

1.  [Objetivos del Proyecto](#1-objetivos-del-proyecto)
2.  [Arquitectura del Sistema](#2-arquitectura-del-sistema)
3.  [Flujos de Trabajo Clave](#3-flujos-de-trabajo-clave)
    - [Recopilación de Datos Diaria](#recopilación-de-datos-diaria)
    - [Simulación y Justificación Fiscal (Mensual)](#simulación-y-justificación-fiscal-mensual)
    - [Análisis de Rentabilidad](#análisis-de-rentabilidad)
4.  [Guía de Inicio Rápido (Desarrollo)](#4-guía-de-inicio-rápido-desarrollo)
    - [Prerrequisitos](#prerrequisitos)
    - [Instalación](#instalación)
5.  [Estructura del Proyecto](#5-estructura-del-proyecto)
6.  [Stack Tecnológico](#6-stack-tecnológico)

---

### 1. Objetivos del Proyecto

El propósito de este software es proporcionar una solución integral para la gestión de "La Pradera", enfocándose en dos áreas críticas:

*   **Optimización Fiscal Inteligente:** Ofrecer una herramienta de simulación para calcular y decidir estratégicamente los ingresos a declarar, garantizando que cada declaración esté justificada con transacciones reales del TPV y cumpla con la normativa **Veri\*factu**.
*   **Inteligencia de Negocio Real:** Mantener un sistema de contabilidad dual (Fiscal vs. Real) que permita analizar la rentabilidad total y real del negocio, incluyendo todos los ingresos y gastos, declarables o no.
*   **Automatización de Procesos:** Digitalizar y automatizar la entrada de facturas de compra a través de un servicio de OCR y simplificar al máximo el registro de datos diarios.

### 2. Arquitectura del Sistema

El sistema está diseñado bajo una filosofía de microservicios y se despliega utilizando Docker Compose, asegurando la portabilidad y el aislamiento de los componentes.

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

*   **`facturascripts-app`**: Contenedor principal con Nginx y PHP-FPM. Aloja el core de FacturaScripts y todos los plugins personalizados que conforman la lógica de negocio.
*   **`mysql-db`**: Contenedor de base de datos MySQL 8. Almacena todos los datos de FacturaScripts, incluyendo las tablas personalizadas de nuestros plugins.
*   **`firebird-db`**: Contenedor que ejecuta un servidor Firebird. Su única función es servir la base de datos del TPV (`Glop.fdb`) para que `facturascripts-app` pueda consultarla.
*   **`ocr-service`**: Un microservicio en Python (Flask/FastAPI) que expone una API REST para procesar facturas en PDF usando la librería `invoice2data`.

### 3. Flujos de Trabajo Clave

#### Recopilación de Datos Diaria

-   **Ingresos Reales:** El usuario introduce manualmente los ingresos totales del día, desglosados en `Ventas reales por tarjeta` y `Ventas reales efectivo`.
-   **Gastos Deducibles:** Las facturas de proveedores en PDF se suben al sistema. El `ocr-service` extrae los datos y se crea una factura de compra oficial.
-   **Gastos No Deducibles:** Los gastos sin factura (ej. pan, horas extras) se registran rápidamente a través de una interfaz de "Gastos Manuales".

#### Simulación y Justificación Fiscal (Mensual)

Este es el núcleo del sistema, realizado a través del **Simulador Fiscal Interactivo**:

1.  **Simulación:** El usuario introduce un `% de Margen de Beneficio Deseado`. El sistema calcula una propuesta de `Efectivo a Declarar` para todo el mes, distribuyéndola entre los días.
2.  **Validación:** Se presenta una tabla de control. El sistema marca con un **Warning (⚠️)** cualquier día donde el `Total a Declarar` propuesto exceda el total de ventas registrado en el TPV (`Ventas TPV GLOP`).
3.  **Ajuste:** El usuario puede editar interactivamente el `Efectivo a Declarar` de los días conflictivos hasta que todos los warnings desaparezcan. Puede re-simular con diferentes márgenes de beneficio hasta encontrar el escenario óptimo.
4.  **Ejecución:** Con un plan validado, el usuario confirma la operación. El sistema se conecta a la base de datos del TPV, selecciona los tickets reales que justifican las cifras declaradas para cada día, y **crea masivamente las Facturas Simplificadas** correspondientes dentro de FacturaScripts, listas para ser enviadas a la AEAT vía **Veri\*factu**.

#### Análisis de Rentabilidad

-   Un informe dedicado compara la **Contabilidad Fiscal** (lo declarado) con la **Contabilidad Real** (todos los ingresos y gastos).
-   Este informe proporciona el **Beneficio Real** del negocio, permitiendo una toma de decisiones basada en datos completos y precisos.

### 4. Guía de Inicio Rápido (Desarrollo)

#### Prerrequisitos

*   Git
*   Docker y Docker Compose
*   Un fichero `Glop.fdb` de prueba.

#### Instalación

1.  **Clonar el repositorio:**
    ```bash
    git clone [URL-DEL-REPOSITORIO]
    cd la-pradera-erp
    ```

2.  **Configurar el entorno:**
    Copia el archivo de ejemplo `.env.example` a `.env` y rellena las variables.
    ```bash
    cp .env.example .env
    ```    Asegúrate de configurar correctamente las contraseñas de la base de datos y las rutas a los volúmenes en el host (NAS).

3.  **Levantar los contenedores:**
    ```bash
    docker-compose up -d --build
    ```

4.  **Instalación de FacturaScripts:**
    Accede a `http://localhost:[PUERTO_FS]` y sigue el asistente de instalación de FacturaScripts, usando las credenciales de la base de datos que definiste en el fichero `.env`.

### 5. Estructura del Proyecto

```
.
├── docker-compose.yml       # Orquestador de contenedores
├── .env.example             # Plantilla para variables de entorno
├── facturascripts/          # Código fuente de la aplicación principal
│   └── MyPlugins/           # Directorio para todos nuestros plugins personalizados
│       ├── importador_compras/
│       ├── simulador_fiscal/
│       └── ...
├── ocr_service/             # Código fuente del microservicio de OCR
│   ├── Dockerfile
│   └── app.py
└── data/                    # Directorio (en .gitignore) para datos persistentes
    ├── glop/
    │   └── GLOP.FDB
    └── mysql/
```

### 6. Stack Tecnológico

*   **Backend:** PHP 8.x, Python 3.x
*   **Frameworks:** FacturaScripts (PHP), Flask/FastAPI (Python)
*   **Bases de Datos:** MySQL 8, Firebird 3.x
*   **Contenerización:** Docker, Docker Compose
*   **Entorno de Despliegue:** Synology NAS
*   **Control de Versiones:** Git, GitHub
