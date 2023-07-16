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

Filtro con todas las peliculas
![Captura de pantalla 2023-07-16 a las 19 17 31](https://github.com/rpairo/Videoclub/assets/14141324/73fd6a17-9626-44dc-9ea2-8b63ff9b2d6a)

Filtro con las peliculas alquiladas
![Captura de pantalla 2023-07-16 a las 19 17 14](https://github.com/rpairo/Videoclub/assets/14141324/d84ff7fb-817f-48df-92bc-951efd60b669)

Login
![Captura de pantalla 2023-07-16 a las 19 27 02](https://github.com/rpairo/Videoclub/assets/14141324/c8b71867-9534-4b30-ace4-fb91958cb135)

Navbar siendo admin
![Captura de pantalla 2023-07-16 a las 19 27 36](https://github.com/rpairo/Videoclub/assets/14141324/305d6527-511f-4fce-8db3-62a3a277a26b)

Navbar siendo customer
![Captura de pantalla 2023-07-16 a las 19 28 09](https://github.com/rpairo/Videoclub/assets/14141324/f9e2cfcb-9389-4512-a7cc-2e10c3293bc1)

Pelicula siendo customer
![Captura de pantalla 2023-07-16 a las 19 28 33](https://github.com/rpairo/Videoclub/assets/14141324/2ebfe613-4ce1-46c4-b6d0-4675921e51ce)

Pelicula siendo admin
![Captura de pantalla 2023-07-16 a las 19 29 11](https://github.com/rpairo/Videoclub/assets/14141324/b088ce4d-9fea-4e02-833c-dd63be40e189)

Edicion de pelicula
![Captura de pantalla 2023-07-16 a las 19 29 29](https://github.com/rpairo/Videoclub/assets/14141324/e7b8c9b1-351f-4c93-860a-42e7f12360c3)

Creacion de pelicula
![Captura de pantalla 2023-07-16 a las 19 29 47](https://github.com/rpairo/Videoclub/assets/14141324/949a89d7-e823-4fb9-b03b-3d1d76285aac)

Acceso no autorizado (rol no permitido)
![Captura de pantalla 2023-07-16 a las 19 30 44](https://github.com/rpairo/Videoclub/assets/14141324/963408dd-0d92-47d7-89d1-310783c6391a)

Consumo de la API
![Captura de pantalla 2023-07-16 a las 19 37 50](https://github.com/rpairo/Videoclub/assets/14141324/eda05902-e1bd-475e-919c-56b9a8128e98)

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
