# LabLaravel — Laboratorio de Laravel

## 1. Introducción

El presente proyecto consiste en la configuración y personalización de una aplicación web desarrollada con Laravel. El proyecto se denomina LabLaravel y se ejecuta en un entorno local mediante WampServer.

La aplicación dispone de una página principal y formularios de registro e inicio de sesión. Además, se personalizó la interfaz con una combinación de colores negro, rojo y blanco para conseguir una apariencia moderna.

Este laboratorio permite practicar la configuración del entorno de desarrollo, el uso de migraciones, la gestión de usuarios y la documentación de un proyecto mediante GitHub.

## 2. Objetivos

### 2.1. Objetivo general

Desarrollar y documentar una aplicación web con Laravel que permita registrar usuarios e iniciar sesión, aplicando conocimientos de configuración, base de datos, vistas y autenticación.

### 2.2. Objetivos específicos

- Verificar la instalación y ejecución de Laravel.
- Reconocer la estructura de carpetas y archivos del proyecto.
- Configurar la conexión con la base de datos.
- Ejecutar y comprobar las migraciones.
- Probar el registro de usuarios y el inicio de sesión.
- Personalizar las vistas con un diseño negro y rojo.
- Documentar el procedimiento mediante capturas de pantalla.
- Registrar las dificultades encontradas y sus soluciones.

## 3. Tecnologías y herramientas utilizadas

- **Laravel 13.35.0:** framework utilizado para desarrollar la aplicación web.
- **PHP:** lenguaje de programación utilizado por Laravel.
- **Composer:** administrador de dependencias de PHP.
- **Node.js y npm:** herramientas para gestionar las dependencias y los recursos de JavaScript.
- **WampServer:** entorno local de desarrollo.
- **Base de datos:** configurada mediante las variables de entorno de Laravel.
- **Visual Studio Code:** editor utilizado para modificar los archivos del proyecto.
- **Git y GitHub:** herramientas para controlar versiones y publicar el proyecto.
- **Bootstrap:** biblioteca de estilos utilizada en la interfaz.

## 4. Requisitos previos

Para ejecutar el proyecto se necesitan los siguientes componentes:

- PHP en una versión compatible con Laravel 13.
- Composer.
- Node.js y npm.
- WampServer o un entorno local equivalente.
- Un motor de base de datos compatible con la configuración del proyecto.
- Visual Studio Code.
- Git y una cuenta de GitHub para publicar el repositorio.

## 5. Instalación y ejecución de Laravel

### 5.1. Ubicación del proyecto

El proyecto se encuentra en la siguiente ruta local:

`C:\wamp64\www\LabLaravel`

Para trabajar correctamente, la terminal debe estar situada en la carpeta donde se encuentra el archivo `artisan`.

### 5.2. Verificación de la versión de Laravel

Se ejecutó el siguiente comando:

```bash
php artisan --version
```

El resultado obtenido fue:

`Laravel Framework 13.35.0`

Esta comprobación permitió confirmar que Laravel se ejecutaba correctamente desde la carpeta del proyecto.

### 5.3. Instalación de dependencias

Para instalar las dependencias del proyecto, si todavía no están instaladas, se utilizan los siguientes comandos:

```bash
composer install
npm install
```

Composer instala las dependencias de PHP y npm instala las dependencias de JavaScript.

### 5.4. Configuración del archivo de entorno

El archivo `.env` contiene los valores de configuración del entorno local, incluida la conexión con la base de datos.

Cuando se configura una copia nueva del proyecto, se debe comprobar que exista el archivo `.env` y que sus valores correspondan al entorno utilizado.

No se deben publicar contraseñas, claves privadas ni otros datos sensibles en GitHub.

### 5.5. Ejecución del servidor local

Para iniciar el servidor de desarrollo se utiliza:

```bash
php artisan serve
```

Laravel muestra la dirección local que se debe abrir en el navegador. Habitualmente es:

`http://127.0.0.1:8000`

Las rutas utilizadas para comprobar la aplicación son:

- Página principal: `http://127.0.0.1:8000`
- Inicio de sesión: `http://127.0.0.1:8000/login`
- Registro: `http://127.0.0.1:8000/register`

## 6. Estructura del proyecto

El proyecto utiliza la estructura habitual de Laravel. Entre sus principales carpetas y archivos se encuentran:

- `app/`: contiene las clases principales de la aplicación.
- `app/Models/`: contiene los modelos de datos, incluido el modelo `User`.
- `database/`: contiene las migraciones y otros recursos relacionados con la base de datos.
- `resources/`: contiene las vistas y otros recursos de la interfaz.
- `resources/views/`: contiene las plantillas Blade.
- `resources/views/auth/`: contiene las vistas de autenticación, como el inicio de sesión y el registro.
- `resources/views/layouts/`: contiene las plantillas generales utilizadas por las vistas.
- `routes/`: contiene las definiciones de rutas.
- `public/`: contiene los recursos públicos de la aplicación.
- `artisan`: archivo que permite ejecutar comandos de Laravel.
- `composer.json`: define las dependencias y la configuración del proyecto PHP.
- `package.json`: define las dependencias y los scripts de JavaScript.
- `README.md`: documento con la descripción e instrucciones del proyecto.

### Evidencia de la estructura

La Figura 1 muestra la organización de las principales carpetas y archivos del proyecto LabLaravel en Visual Studio Code.

<img width="682" height="776" alt="image" src="https://github.com/user-attachments/assets/c4bf7fae-5545-4482-b542-316e13cba6ec" />

**Figura 1.** Estructura del proyecto LabLaravel.  


## 7. Configuración y migraciones de la base de datos

### 7.1. Configuración de la conexión

La conexión con la base de datos se establece en el archivo `.env`, mediante variables como:

- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`

Los valores deben corresponder a la configuración real del entorno local.

### 7.2. Ejecución de las migraciones

Las migraciones permiten crear las tablas que necesita la aplicación. Para ejecutarlas se utiliza:

```bash
php artisan migrate
```

Para consultar su estado se ejecuta:

```bash
php artisan migrate:status
```

Durante la comprobación del proyecto, las siguientes migraciones aparecieron con el estado `Ran`:

- `0001_01_01_000000_create_users_table`
- `0001_01_01_000001_create_cache_table`
- `0001_01_01_000002_create_jobs_table`

Esto indica que las tres migraciones iniciales se habían ejecutado correctamente.

### Evidencia de las migraciones

La Figura 2 presenta el resultado de la consulta del estado de las migraciones desde la terminal.

<img width="757" height="147" alt="image" src="https://github.com/user-attachments/assets/f7fb6a55-3228-46d8-bbbf-101fc480a4be" />

**Figura 2.** Estado de las migraciones de Laravel.  


## 8. Desarrollo y personalización de la interfaz

### 8.1. Página principal

Se personalizó la página de bienvenida para utilizar un diseño con fondo negro, detalles rojos y textos claros.

La página principal incluye el nombre LabLaravel y enlaces para acceder a los formularios de inicio de sesión y registro.

La Figura 3 muestra la apariencia de la página principal después de aplicar la personalización visual.

<img width="1898" height="833" alt="image" src="https://github.com/user-attachments/assets/affa6096-4305-43ae-94f6-3521463d84ec" />

**Figura 3.** Página principal de LabLaravel con diseño negro y rojo.  


### 8.2. Formulario de inicio de sesión

La aplicación dispone de un formulario de inicio de sesión para usuarios registrados.

El formulario incluye campos para el correo electrónico y la contraseña, la opción de recordar la sesión y un enlace para recuperar la contraseña cuando la ruta correspondiente está disponible.

Se modificaron los estilos de la vista y de la plantilla general para aplicar fondos oscuros, texto claro y botones rojos, manteniendo la estructura del formulario de Laravel.

La Figura 4 presenta el formulario de inicio de sesión.

<img width="1668" height="736" alt="image" src="https://github.com/user-attachments/assets/a9b1bb6d-c632-4ec5-a75c-c66de3eb6f7d" />

**Figura 4.** Formulario de inicio de sesión de LabLaravel.  


### 8.3. Formulario de registro

La aplicación incluye un formulario que permite registrar nuevos usuarios.

La vista de registro forma parte de las vistas de autenticación del proyecto. Su funcionamiento depende de las rutas, las validaciones y los componentes de Laravel configurados en la aplicación.

La Figura 5 presenta el formulario de registro.

<img width="1638" height="522" alt="image" src="https://github.com/user-attachments/assets/9f0aba97-874f-4cbc-a691-ae5b2590a5bd" />

**Figura 5.** Formulario de registro de usuarios de LabLaravel.  


## 9. Pruebas y resultados

### 9.1. Prueba de la versión de Laravel

Se ejecutó `php artisan --version` desde la carpeta correcta del proyecto.

El resultado mostró Laravel Framework 13.35.0, confirmando que el comando Artisan podía ejecutarse correctamente.

### 9.2. Prueba de las migraciones

Se ejecutó `php artisan migrate:status` y se verificó que las tres migraciones iniciales aparecían como ejecutadas.

### 9.3. Prueba de registro de usuarios

Se registró un usuario de prueba desde el formulario de registro.

Posteriormente, se utilizó Laravel Tinker para consultar el usuario más reciente de la base de datos.

Para iniciar Tinker se ejecutó:

```bash
php artisan tinker
```

Dentro de Tinker se introdujo:

```php
\App\Models\User::latest()->first();
```

La consulta permitió comprobar los datos del usuario registrado. La contraseña apareció almacenada como un hash, en lugar de mostrarse como texto original.

La Figura 6 debe mostrar una captura de esta comprobación o de una consulta equivalente realizada sobre la tabla de usuarios.

<img width="757" height="340" alt="image" src="https://github.com/user-attachments/assets/4da6e76a-5031-4f60-a13e-1382344b0d02" />

**Figura 6.** Comprobación del usuario registrado mediante Laravel Tinker.  


### 9.4. Prueba de inicio de sesión

Después del registro, se abrió el formulario de inicio de sesión y se introdujeron las credenciales del usuario de prueba.

Se comprobó que el inicio de sesión funcionaba correctamente.

Esta prueba permitió verificar el funcionamiento básico del registro y del acceso a la aplicación.

## 10. Dificultades encontradas y soluciones

### 10.1. Ejecución de Artisan desde una carpeta incorrecta

**Dificultad:** al ejecutar `php artisan --version` desde `C:\Users\adrym`, apareció el mensaje `Could not open input file: artisan`.

**Solución:** se cambió al directorio del proyecto, `C:\wamp64\www\LabLaravel`, y se volvió a ejecutar el comando. La versión de Laravel se mostró correctamente.

### 10.2. Fondo blanco en las vistas

**Dificultad:** algunas partes de la interfaz mantenían un fondo blanco debido a los estilos de Bootstrap y de la plantilla general.

**Solución:** se modificaron los estilos de las vistas Blade y de `resources/views/layouts/app.blade.php` para aplicar fondos oscuros y detalles rojos. El resultado visual final debe comprobarse mediante las capturas de pantalla de la aplicación.

### 10.3. Comprobación del almacenamiento de usuarios

**Dificultad:** era necesario confirmar que el registro guardaba la información en la base de datos.

**Solución:** se consultó el usuario más reciente mediante Laravel Tinker y se probó el inicio de sesión con las credenciales del usuario registrado.

## 11. Conclusiones

El desarrollo de este laboratorio permitió trabajar con una aplicación Laravel en un entorno local, comprobar su versión y ejecutar las migraciones iniciales.

También se practicó la personalización de las vistas Blade, la configuración de estilos generales y la comprobación del registro e inicio de sesión de usuarios.

Finalmente, se organizó la documentación del proyecto para describir su estructura, los pasos de ejecución, las pruebas realizadas y las dificultades encontradas.

## 12. Referencias bibliográficas

1. Laravel. (s. f.). *Laravel Documentation*. https://laravel.com/docs
2. PHP. (s. f.). *PHP Manual*. https://www.php.net/docs.php
3. GitHub. (s. f.). *GitHub Docs*. https://docs.github.com/

## 13. Datos académicos

- **Estudiante:** [Escribir nombre completo]
- **Asignatura:** [Escribir nombre de la asignatura]
- **Docente:** [Escribir nombre del docente]
- **Institución:** [Escribir nombre de la institución]
- **Fecha de entrega:** [Escribir fecha de entrega]
