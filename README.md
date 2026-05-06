# LegalCase Manager - Sistema de Gestión Jurídica ⚖️

![PHP](https://img.shields.io/badge/Backend-PHP%207.4+%2F8.x-777BB4?logo=php&logoColor=white)
![Python](https://img.shields.io/badge/Automation-Python%203.x-3776AB?logo=python&logoColor=white)
![MySQL](https://img.shields.io/badge/DB-MySQL-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Frontend-Bootstrap%205-7952B3?logo=bootstrap&logoColor=white)

**LegalCase Manager** es una plataforma integral para despachos de abogados que combina la gestión web tradicional con automatizaciones avanzadas. El sistema no solo organiza expedientes, sino que interactúa con el sistema operativo y servicios externos para simplificar la labor jurídica.

---

## 🚀 Funcionalidades Destacadas

*   **Gestión de Casos y Actividades:** Control total de expedientes con una interfaz limpia basada en Bootstrap y JS dinámico.
*   **Automatización con Python:** 
    *   **Triggers de Ventana:** Scripts de Python encargados de gestionar el cambio de ventanas y flujos de trabajo en el SO.
    *   **Integración con Google Calendar:** Creación y guardado automático de eventos y audiencias directamente en el calendario desde la plataforma.
*   **Gestión de Datos Robusta:**
    *   **Base de Datos MySQL:** Estructura optimizada para el manejo de grandes volúmenes de información legal.
    *   **Respaldos Automáticos:** Módulo de seguridad para generar y restaurar copias de seguridad de la base de datos de forma íntegra.
*   **Panel de Control:** Resumen visual de tareas pendientes y plazos críticos.

---

## 🛠️ Stack Tecnológico

*   **Frontend:** HTML5, CSS3 (Bootstrap 5), JavaScript "Vanilla".
*   **Backend:** PHP Puro para la lógica de servidor y gestión de peticiones.
*   **Automatización:** Python (utilizado para scripts de integración y control de procesos del sistema).
*   **Base de Datos:** MySQL.

---

## 📂 Estructura del Proyecto

```text
├── core/               # Lógica en PHP (Conexión BD, funciones)
├── python_scripts/     # Scripts de Python para automatización y Google Calendar
├── assets/             # CSS (Bootstrap), JS y librerías frontend
├── backups/            # Carpeta destinada a los respaldos de la BD
├── views/              # Interfaz de usuario (PHP/HTML)
└── sql/                # Scripts de creación y estructura de MySQL