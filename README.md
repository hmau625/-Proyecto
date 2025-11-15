# 🛒 Gestión de Categorías, Productos y Vendedores - Laravel CRUD

## 🚀 Descripción general

Este proyecto es una aplicación web desarrollada con Laravel que permite gestionar categorías, productos y vendedores mediante operaciones CRUD (crear, leer, actualizar y eliminar). Está orientado a facilitar la administración de negocios, ofreciendo control sobre el inventario, organización de productos por categoría y registro de vendedores. La base de datos se gestiona localmente con phpMyAdmin a través de XAMPP, lo que simplifica la instalación y el uso en entornos de desarrollo.

## ⚙️ Requisitos técnicos

Para ejecutar el proyecto correctamente se requiere:

- PHP 8.1 o superior  
- Composer  
- Laravel 10 o superior  
- MySQL (preferiblemente con XAMPP)  
- Node.js y npm (si se compilan assets con Laravel Mix)  
- Navegador web moderno

## 🛠️ Instalación

1. Clonar el repositorio y acceder al directorio del proyecto.  
2. Ejecutar `composer install` para instalar las dependencias.  
3. Copiar el archivo `.env.example` a `.env` y generar la clave de la aplicación con `php artisan key:generate`.  
4. Configurar los parámetros de conexión a la base de datos en el archivo `.env`.  
5. Ejecutar `php artisan migrate` para crear las tablas necesarias.  
6. (Opcional) Ejecutar `php artisan db:seed` para poblar la base de datos con datos de prueba.  
7. Iniciar el servidor local con `php artisan serve` y acceder a [http://localhost:8000](http://localhost:8000).

## 🧪 Comandos útiles

- `php artisan migrate` → Ejecuta las migraciones  
- `php artisan db:seed` → Inserta datos de prueba  
- `php artisan serve` → Inicia el servidor de desarrollo  
- `php artisan make:model Nombre -mcr` → Crea modelo, migración, controlador y recurso  
- `npm install && npm run dev` → Compila los assets con Laravel Mix

## 🗂️ Estructura del proyecto

- `app/Models` → Modelos de datos  
- `app/Http/Controllers` → Controladores para cada entidad  
- `resources/views` → Vistas Blade  
- `routes/web.php` → Rutas de la aplicación  
- `database/migrations` → Migraciones de base de datos  
- `database/seeders` → Seeders para datos de prueba

- ## 🎬 Demo del proyecto

YouTube: [Ver Demo](https://youtu.be/eSyb2RhLLw8)


