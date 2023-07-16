# Proyecto Laravel - Videoclub

Este proyecto Laravel es un sistema de videoclub que incluye roles de "Customer" (cliente) y "Admin" (administrador). El sistema proporciona funciones de inicio de sesión, así como un filtro en el catálogo para mostrar las películas disponibles y las películas ya alquiladas.

## Funcionalidades extra

- Registro y autenticación de usuarios
- Roles de usuario:
  - **Admin**: tiene acceso completo al sistema, incluyendo la administración completa de películas.
  - **Customer**: tiene acceso limitado y solo puede alquilar y devolver películas.
- Catálogo de películas:
  - Las películas se pueden marcar como "disponibles" o "alquiladas".
  - Los usuarios pueden filtrar el catálogo para mostrar solo las películas disponibles para alquilar.
- Gestión de usuarios (solo para el rol de Admin):
  - Creación, edición y eliminación de peliculas.

## Usuarios de Prueba

A continuación se detallan los usuarios de prueba predefinidos para probar el sistema:

### Admin

- Correo electrónico: usuario1@example.com
- Contraseña: password1

### Customer

- Correo electrónico: usuario2@example.com
- Contraseña: password2

**Nota**: Recuerda que estos son solo usuarios de prueba y no deben ser utilizados en un entorno de producción.

## Configuración y Ejecución del Proyecto

1. Clona el repositorio del proyecto en tu máquina local:

   ```bash
   git clone https://github.com/rpairo/Videoclub.git
   ```

2. Navega hasta el directorio del proyecto:

   ```bash
   cd Videoclub
   ```

3. Instala las dependencias del proyecto utilizando Composer:

   ```bash
   composer install
   ```

4. Crea un archivo `.env` basado en el archivo de ejemplo `.env.example` y configura la conexión a la base de datos y otros valores necesarios:

   ```bash
   cp .env.example .env
   ```

5. Genera una clave de aplicación única:

   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones para crear las tablas de la base de datos:

   ```bash
   php artisan migrate
   ```

7. Ejecuta los seeders para poblar la base de datos con datos de prueba:

   ```bash
   php artisan db:seed
   ```

8. Inicia el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

9. Abre tu navegador web y visita `http://localhost:8000` para acceder al proyecto.

¡Listo! Ahora puedes explorar y probar las funcionalidades del sistema utilizando los usuarios de prueba proporcionados.

## Contribuciones

Si deseas contribuir a este proyecto, siéntete libre de abrir un "Pull Request" en el repositorio. Agradecemos cualquier mejora o sugerencia que puedas tener.

## Licencia

Este proyecto se distribuye bajo la Licencia MIT. Para más detalles, consulta el archivo [LICENSE](LICENSE).