# Dashboard Administrativo – SIGEEV 🎛️

Este proyecto corresponde a la **tarea #78: Creación de Dashboard Administrativo con TailwindCSS** dentro del Sistema de Gestión de Eventos y Congresos (SIGEEV – FESC).  
Fue diseñado e implementado inicialmente por **Nelly Fabiola Cano Oviedo** como prototipo funcional y luego refinado en el proyecto principal bajo supervisión del Ing. Manuel Parada.

---

## 📌 Descripción

El **Dashboard Administrativo** permite a los administradores visualizar métricas clave de participación en eventos, últimas actividades y accesos rápidos a funciones principales.  
El diseño fue construido con **TailwindCSS** para garantizar un estilo moderno y totalmente **responsive**, adaptable a dispositivos móviles y escritorios.

---

## 🎯 Historia de Usuario

**Como administrador de la plataforma, necesito un dashboard intuitivo que muestre métricas clave, últimas actividades y acceso rápido a funciones principales, implementado con Tailwind CSS para garantizar un diseño responsive y moderno.**

---

## ✅ Criterios de Aceptación

### Layout Principal
- **Sidebar**: barra lateral colapsable.  
- **Navbar**: barra superior con buscador y notificaciones.  
- **Main Content**: área principal de visualización.  
- **Responsive Design**:  
  - Menú hamburguesa en versión móvil.  
  - Transiciones suaves al colapsar/expandir sidebar.  

### Componentes del Dashboard
- **Cards de Métricas**:  
  - Total de usuarios registrados.  
  - Eventos activos.  
  - Ingresos mensuales.  
  - Tasa de conversión.  
- **Gráficos**:  
  - Gráfico de barras → participación en eventos.  
  - Gráfico circular → distribución por tipos de eventos.  
- **Tabla de Últimos Eventos**:  
  - Paginación y filtros por fecha/tipo.  
- **Widget de Actividad Reciente**:  
  - Log de acciones de usuarios.  

### Estilos
- Personalización con **TailwindCSS**.  
- Paleta de colores institucional (*primary-500*).  
- Compatibilidad con **dark mode**.  

---

## 🔧 Flujo de Trabajo

1. **Diseño**  
   - Prototipado inicial en Figma.  
   - Definición de paleta de colores institucional.  

2. **Implementación**  
   - Construcción de la estructura base con componentes reutilizables.  
   - Integración de gráficos mediante **Chart.js** o **ApexCharts**.  

3. **Testing**  
   - Validación de responsive con Chrome DevTools.  
   - Pruebas de dark mode.  

---

## 📂 Estructura del Repositorio

- `resources/` → Vistas Blade con TailwindCSS.  
- `routes/` → Rutas del proyecto.  
- `public/` → Archivos estáticos.  
- `database/` → Migraciones y seeders base.  
- `config/` y `app/` → Configuración Laravel.

---

## 🚀 Requisitos

- **Laravel 10+**  
- **TailwindCSS**  
- **PHP 8.1+**  
- **Node.js 18+**  

---

## 📌 Recurso de Referencia

Video de referencia usado para el diseño:  
[Dashboard con TailwindCSS](https://www.youtube.com/watch?v=uWtrEaU9iHU)  

---

## 👨‍💻 Autores y Colaboradores

- **Nelly Fabiola Cano Oviedo** – Prototipo inicial del Dashboard.  
- **Ing. Manuel Parada** – Refinamiento e integración en el proyecto principal.  
- **Unidad de Desarrollo FESC**.  

---

## 📜 Licencia

Proyecto académico desarrollado en la **FESC – Unidad de Desarrollo de Software**.  
Uso institucional y educativo.
