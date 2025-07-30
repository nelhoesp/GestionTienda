### 1. 📌 Título del Proyecto

Gestión de Tienda con API en Laravel

---

### 2. 🧠 Descripción

Este proyecto consta de una API RESTful construida con Laravel basada en la clásica base de datos Northwind. Fue elaborada como un proyecto personal, principalmente para practicar conceptos de backend, estructura de API REST, seeders, factories, migraciones y filtros avanzados. Además, cuenta con un frontend básico usando Bootstrap 5. El proyecto se planea mejorar con el tiempo para incluir autenticación, cachés y más funcionalidades.

---

### 3. 🚀 Tecnologías Utilizadas

- Laravel 12
- MySQL
- PHP 8+
- Bootstrap 5
- DataTables

---

### 4. ⚙️ Instalación

1. Clonar el repositorio
   ```bash
   git clone https://github.com/nelhoesp/GestionTienda.git
   cd GestionTienda
   ```

2. Instalar las dependencias

   ```bash
   npm install
   composer install
   ```

3. Configurar la base de datos en el `.env`

4. Ejecutar las migraciones y seeders

   ```bash
   php artisan migrate --seed
   ```

5. Iniciar el servidor de desarrollo

   ```bash
   php artisan serve
   ```

---

### 5. 📡 Endpoints Disponibles

Se pueden hacer solicitudes `GET`, `POST`, `PUT` y `PATCH` a los siguientes endpoints:

```markdown
- /api/v1/customers
- /api/v1/orders?includeEmployee=true&includeShipper=true&includeOrders=true
- /api/v1/products
- /api/v1/categories
- /api/v1/employees
- /api/v1/order_details
- /api/v1/shippers
- /api/v1/suppliers

> Además, la API soporta paginación, filtros y relaciones condicionales.
````

---

### 6. 🧪 Características

- CRUD completo para todas las entidades principales
- Recursos personalizados con formato limpio de JSON
- Filtros dinámicos vía query string (e.g. `?postalCode[gt]=30000`)
- Paginación configurable
- Posibilidad de incluir relaciones mediante parámetros

---

### 7. 📁 Estructura del Proyecto

```markdown
- app/
  - Filters/
    - V1/
    - ApiFilter.php
  - Http/
    - Controllers/
    - Requests/
    - Resources/
  - Models/
- routes/
  - api.php
  - web.php
- database/
  - seeders/
  - factories/
  - migrations/
```

---

### 8. 👤 Autor

Creado por Nelho Espinoza – @nelhoesp

---

### 9. 📄 Licencia

Este proyecto no tiene licencia. Es un proyecto de uso personal y educativo.
