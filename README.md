 <div align="center">

# UNIVERSIDAD TECNOLÓGICA DE PANAMÁ

### FACULTAD DE INGENIERÍA DE SISTEMAS COMPUTACIONALES

### CAMPUS VÍCTOR LEVIS SASSO

<br>

<img src="https://raw.githubusercontent.com/laravel/art/master/laravel-logo.png" alt="Laravel" width="260">

<br><br>

# 🌸 Laboratorio #2: Implementación del Login y Register en Laravel

---

### Documentación del laboratorio paso a paso

<br>

| **Datos** | **Información** |
|:---|:---|
| **Curso** | Desarrollo Web |
| **Instructor** | Ing. Irina Fong |
| **Unidad I** | Modelo Vista Controlador (MVC) |
| **Semestre** | II Semestre 2026 |
| **Estudiante** | Adriana Mendoza |

</div>

---

## 📑 Índice

1. [Introducción y objetivo](#-introducción-y-objetivo)
2. [Tecnologías utilizadas](#-tecnologías-utilizadas)
3. [Fase 1: Entorno de desarrollo](#-fase-1-entorno-de-desarrollo)
4. [Fase 2: Proyecto Laravel](#-fase-2-proyecto-laravel)
5. [Fase 3: Configuración de la base de datos](#-fase-3-configuración-de-la-base-de-datos)
6. [Fase 4: Implementación del login y registro](#-fase-4-implementación-del-login-y-registro)
7. [Fase 5: Personalización de las vistas](#-fase-5-personalización-de-las-vistas)
8. [Fase 6: Pruebas de funcionamiento](#-fase-6-pruebas-de-funcionamiento)
9. [Fase 7: GitHub](#-fase-7-github)
10. [Errores comunes](#-errores-comunes)
11. [Conclusión](#-conclusión)
12. [Referencias](#-referencias)

---

## 🎯 Introducción y objetivo

En este laboratorio se trabajó en el desarrollo de una aplicación web utilizando Laravel y PHP, con el propósito de implementar un sistema de autenticación que permita a los usuarios registrarse e iniciar sesión.

El proyecto utiliza el patrón Modelo Vista Controlador (MVC), que permite organizar el código en modelos, vistas y controladores. También se trabajó con una base de datos MySQL y con la personalización de las vistas para modificar la apariencia de las páginas de autenticación.

El objetivo principal es comprender el funcionamiento del sistema de autenticación de Laravel y aplicar los conocimientos adquiridos en el desarrollo de una aplicación web.

Este documento presenta las herramientas utilizadas, los pasos realizados, las pruebas del sistema y el proceso de publicación del código fuente en GitHub.

## 🔧 Tecnologías utilizadas

| Herramienta | Uso en el laboratorio |
|---|---|
| WampServer | Entorno de desarrollo local para trabajar con PHP y MySQL. |
| PHP | Lenguaje de programación utilizado por Laravel. |
| Laravel 13.35.0 | Framework utilizado para desarrollar la aplicación web. |
| MySQL | Sistema de gestión de bases de datos. |
| phpMyAdmin | Herramienta para administrar la base de datos. |
| Composer | Administrador de dependencias de PHP. |
| Node.js | Entorno necesario para ejecutar herramientas del frontend. |
| npm | Administrador de paquetes de JavaScript. |
| Bootstrap | Framework CSS utilizado para las interfaces de usuario. |
| Visual Studio Code | Editor utilizado para modificar los archivos del proyecto. |
| Git | Sistema de control de versiones. |
| GitHub | Plataforma para alojar y publicar el código fuente. |
| GitHub Desktop | Aplicación gráfica para administrar repositorios Git. |

## 🧰 Fase 1: Entorno de desarrollo

### 📥 Paso 1: Preparación de WampServer

Se utilizó WampServer como entorno de desarrollo local en Windows. Esta herramienta permite trabajar con aplicaciones PHP y bases de datos MySQL desde la computadora.

El proyecto se encuentra dentro de la carpeta `www`, que forma parte del directorio de instalación de WampServer.

**Evidencia:**

*Figura 1: Entorno de desarrollo WampServer instalado en Windows.*

📷 **Captura 1:** Colocar una imagen de WampServer en la computadora.

### ⚙️ Paso 2: Verificación de PHP

Se comprobó que PHP estuviera disponible desde la terminal, ya que Laravel necesita este lenguaje para ejecutar sus comandos y procesar las solicitudes de la aplicación.

Se utilizó el siguiente comando:

```bash
php -v
```

Este comando muestra la versión de PHP disponible en el sistema.

**Evidencia:**

*Figura 2: Verificación de la versión de PHP desde la terminal.*

📷 **Captura 2:** Colocar una imagen del resultado de `php -v`.

### 📦 Paso 3: Verificación de Composer

Composer es el administrador de dependencias utilizado por PHP. Permite instalar paquetes y administrar las bibliotecas que necesita Laravel.

Para verificar su disponibilidad, se ejecutó:

```bash
composer -V
```

**Evidencia:**

*Figura 3: Comprobación de Composer desde la terminal.*

📷 **Captura 3:** Colocar una imagen del resultado de `composer -V`.

### 🟢 Paso 4: Verificación de Node.js y npm

Node.js y npm se utilizan para administrar las dependencias del frontend y ejecutar herramientas como Vite.

Se verificaron sus versiones mediante los comandos:

```bash
node -v
npm -v
```

En el entorno utilizado se identificó Node.js versión `v24.21.0` y npm versión `11.19.0`.

**Evidencia:**

*Figura 4: Verificación de las versiones de Node.js y npm.*

📷 **Captura 4:** Colocar una imagen de los resultados de ambos comandos.

## 🚀 Fase 2: Proyecto Laravel

### 📂 Paso 5: Ubicación del proyecto

El proyecto desarrollado se encuentra en la siguiente ruta de Windows:

```text
C:\wamp64\www\LabLaravel
```

Esta carpeta contiene los archivos necesarios para ejecutar y modificar la aplicación Laravel.

Para ingresar a la carpeta desde una terminal, se utiliza:

```bash
cd C:\wamp64\www\LabLaravel
```

**Evidencia:**

*Figura 5: Ubicación de la carpeta LabLaravel dentro de WampServer.*

📷 **Captura 5:** Colocar una imagen de la carpeta `LabLaravel` abierta en el Explorador de archivos o Visual Studio Code.

### 🔍 Paso 6: Verificación de la versión de Laravel

Una vez dentro de la carpeta del proyecto, se ejecutó el siguiente comando:

```bash
php artisan --version
```

El resultado obtenido fue:

```text
Laravel Framework 13.35.0
```

Esto confirmó que el proyecto utiliza Laravel 13.35.0 y que Artisan está disponible para ejecutar comandos de administración.

**Evidencia:**

*Figura 6: Verificación de la versión de Laravel instalada.*

📷 **Captura 6:** Colocar una imagen del resultado de `php artisan --version`.

### 🧱 Paso 7: Reconocimiento de la estructura del proyecto

Se identificaron las carpetas principales de Laravel para comprender cómo se organiza la aplicación.

| Carpeta o archivo | Función |
|---|---|
| `app/` | Contiene las clases principales de la aplicación. |
| `app/Models/` | Contiene los modelos de datos. |
| `app/Http/Controllers/` | Contiene los controladores que gestionan las solicitudes. |
| `resources/views/` | Contiene las vistas y plantillas Blade. |
| `resources/views/auth/` | Contiene las vistas de autenticación. |
| `routes/web.php` | Define las rutas web de la aplicación. |
| `database/migrations/` | Contiene los archivos de migración de la base de datos. |
| `.env` | Contiene variables de configuración del entorno. |
| `package.json` | Define las dependencias y los scripts del frontend. |

**Evidencia:**

*Figura 7: Estructura de carpetas del proyecto Laravel en Visual Studio Code.*

📷 **Captura 7:** Colocar una imagen del Explorador de archivos de Visual Studio Code mostrando las carpetas principales.

## 💾 Fase 3: Configuración de la base de datos

### 🗄️ Paso 8: Acceso a phpMyAdmin

Se utilizó phpMyAdmin para administrar MySQL y consultar las tablas de la base de datos.

En un entorno local donde WampServer esté configurado correctamente, se puede acceder mediante:

```text
http://localhost/phpmyadmin/
```

Desde esta herramienta es posible consultar las bases de datos, revisar las tablas y verificar los registros almacenados.

**Evidencia:**

*Figura 8: Acceso a phpMyAdmin para administrar MySQL.*

📷 **Captura 8:** Colocar una imagen de phpMyAdmin abierto en el navegador.

### 📝 Paso 9: Configuración del archivo `.env`

Laravel utiliza el archivo `.env` para definir parámetros de configuración, entre ellos los datos necesarios para conectarse con la base de datos.

Los parámetros deben coincidir con la configuración real de MySQL.

Ejemplo de configuración:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base
DB_USERNAME=root
DB_PASSWORD=
```

**Importante:** `nombre_de_la_base` es un marcador de ejemplo. Debe sustituirse por el nombre real de la base de datos del proyecto. El usuario, la contraseña y el puerto también deben corresponder a la configuración de WampServer.

El archivo `.env` contiene información de configuración y no debe publicarse con credenciales privadas en un repositorio público.

**Evidencia:**

*Figura 9: Configuración de las variables de conexión a MySQL en el archivo `.env`.*

📷 **Captura 9:** Colocar una imagen de las variables de conexión, ocultando cualquier contraseña o dato privado.

### 🔄 Paso 10: Verificación de las migraciones

Las migraciones permiten crear y modificar las tablas de la base de datos de forma organizada.

Se utilizó el siguiente comando para consultar su estado:

```bash
php artisan migrate:status
```

En el proyecto se comprobó que las migraciones correspondientes a usuarios, caché y trabajos aparecían como ejecutadas.

**Evidencia:**

*Figura 10: Estado de las migraciones de la base de datos.*

📷 **Captura 10:** Colocar una imagen del resultado de `php artisan migrate:status`.

## 🔑 Fase 4: Implementación del login y registro

### 🔌 Paso 11: Vistas de autenticación

Se trabajó con las páginas de inicio de sesión y registro del proyecto Laravel.

Estas páginas permiten presentar los formularios mediante los cuales el usuario introduce sus credenciales o proporciona los datos necesarios para crear una cuenta.

Las vistas de autenticación se encuentran organizadas dentro de:

```text
resources/views/auth/
```

En esta carpeta se pueden encontrar las plantillas Blade relacionadas con la autenticación, según los archivos que estén presentes en el proyecto.

**Evidencia:**

*Figura 11: Archivos de las vistas de autenticación en Laravel.*

📷 **Captura 11:** Colocar una imagen de la carpeta `resources/views/auth/` abierta en Visual Studio Code.

### 📝 Paso 12: Formulario de registro

El formulario de registro permite introducir los datos necesarios para crear una cuenta de usuario.

La ruta utilizada para acceder al formulario es:

```text
http://127.0.0.1:8000/register
```

Esta dirección funciona cuando el servidor de desarrollo de Laravel está ejecutándose y las rutas de autenticación están configuradas.

**Evidencia:**

*Figura 12: Formulario de registro de usuarios.*

📷 **Captura 12:** Colocar una imagen del formulario de registro abierto en el navegador.

### 🔓 Paso 13: Formulario de inicio de sesión

El formulario de inicio de sesión permite ingresar las credenciales de una cuenta existente para acceder a la aplicación.

La ruta correspondiente es:

```text
http://127.0.0.1:8000/login
```

El formulario debe permitir introducir las credenciales solicitadas por el sistema de autenticación.

**Evidencia:**

*Figura 13: Formulario de inicio de sesión de Laravel.*

📷 **Captura 13:** Colocar una imagen del formulario de login abierto en el navegador.

### 🧬 Paso 14: Modelo de usuario

Laravel utiliza el modelo `User` para representar los usuarios de la aplicación y facilitar la interacción con la tabla correspondiente de la base de datos.

El archivo del modelo se encuentra normalmente en:

```text
app/Models/User.php
```

Este modelo forma parte del componente Modelo del patrón MVC.

**Evidencia:**

*Figura 14: Archivo User.php dentro de la carpeta de modelos.*

📷 **Captura 14:** Colocar una imagen del archivo `User.php` abierto en Visual Studio Code.

### ⚙️ Paso 15: Controladores y rutas

Los controladores gestionan la lógica que corresponde a las solicitudes de la aplicación, mientras que las rutas determinan cómo se accede a las distintas páginas.

En Laravel, las rutas web se definen en:

```text
routes/web.php
```

Los controladores relacionados con las solicitudes HTTP se organizan normalmente dentro de:

```text
app/Http/Controllers/
```

Esta separación permite organizar el código y mantener las vistas independientes de la lógica que las administra.

**Evidencia:**

*Figura 15: Archivos de rutas y controladores del proyecto Laravel.*

📷 **Captura 15:** Colocar una imagen de `routes/web.php` y de la carpeta de controladores.

## 🎨 Fase 5: Personalización de las vistas

### 🖌️ Paso 16: Modificación del diseño

Se trabajó en la personalización visual de las páginas de autenticación para darles una apariencia distinta a la presentación predeterminada de Laravel.

El diseño buscado utiliza una combinación de colores negro y rojo, con cambios en elementos de la interfaz como los fondos, las tarjetas, los campos de entrada y los botones.

El objetivo es mejorar la presentación de los formularios sin perder su función principal.

**Evidencia:**

*Figura 16: Modificaciones de los archivos de diseño de la aplicación.*

📷 **Captura 16:** Colocar una imagen del código HTML, Blade o CSS que se modificó para personalizar el diseño.

### 🧩 Paso 17: Personalización de las vistas Blade

Laravel utiliza Blade como motor de plantillas. Las vistas se pueden modificar mediante archivos con extensión `.blade.php`.

Dentro de la carpeta de autenticación se trabajó con las páginas correspondientes al login y registro. También se revisaron otras vistas relacionadas con la autenticación, como la verificación de correo y la recuperación de contraseñas.

Las carpetas y archivos relacionados pueden incluir:

```text
resources/views/auth/
resources/views/auth/passwords/
resources/views/layouts/
```

La presencia de cada archivo depende de la estructura concreta del proyecto.

**Evidencia:**

*Figura 17: Organización de las vistas Blade utilizadas en la autenticación.*

📷 **Captura 17:** Colocar una imagen de las vistas y carpetas que se modificaron.

### 🎨 Paso 18: Ajustes de estilos

Se revisaron los estilos de los formularios para adaptar su apariencia al diseño deseado.

En caso de utilizar CSS, los estilos deben estar vinculados correctamente a las vistas para que los cambios se reflejen en el navegador.

Los recursos del frontend pueden encontrarse en:

```text
resources/css/
resources/js/
```

La ubicación y la forma de cargar los estilos dependen de la configuración del proyecto.

**Evidencia:**

*Figura 18: Archivos de estilos utilizados para personalizar la interfaz.*

📷 **Captura 18:** Colocar una imagen de los archivos CSS o de los recursos frontend modificados.

### 🖥️ Paso 19: Resultado visual de las páginas

Una vez aplicados los cambios, se revisaron las páginas en el navegador para comprobar la apariencia de los formularios.

Se buscó mantener una presentación coherente entre el inicio de sesión y el registro.

**Evidencia:**

*Figura 19: Resultado visual de la página de inicio de sesión personalizada.*

📷 **Captura 19:** Colocar una imagen del login con el diseño final.

*Figura 20: Resultado visual de la página de registro personalizada.*

📷 **Captura 20:** Colocar una imagen del registro con el diseño final.

## 🧪 Fase 6: Pruebas de funcionamiento

### ▶️ Paso 20: Inicio del servidor de desarrollo

Para probar la aplicación se puede iniciar el servidor de desarrollo de Laravel desde la carpeta del proyecto.

El comando es:

```bash
php artisan serve
```

Cuando el servidor inicia correctamente, la terminal muestra la dirección local en la que se puede abrir la aplicación.

**Nota:** Si utilizas otro comando para iniciar Laravel y Vite, debes mantener abierta la terminal correspondiente mientras pruebas el proyecto.

**Evidencia:**

*Figura 21: Inicio del servidor de desarrollo de Laravel.*

📷 **Captura 21:** Colocar una imagen de la terminal mostrando el servidor en ejecución.

### 🌐 Paso 21: Acceso a las páginas desde el navegador

Se accedió a las páginas de autenticación utilizando las rutas configuradas en el proyecto.

Las direcciones utilizadas para las pruebas fueron:

```text
http://127.0.0.1:8000/login
http://127.0.0.1:8000/register
```

Estas rutas permiten comprobar que los formularios estén disponibles en el navegador.

**Evidencia:**

*Figura 22: Acceso a la aplicación Laravel desde el navegador.*

📷 **Captura 22:** Colocar una imagen de la aplicación ejecutándose localmente.

### 🔍 Paso 22: Comprobación de la base de datos

Se revisó el estado de las migraciones mediante Artisan y se utilizó phpMyAdmin para consultar la base de datos.

La tabla `users` es utilizada normalmente por Laravel para almacenar la información de los usuarios, de acuerdo con la configuración del modelo y del sistema de autenticación.

**Evidencia:**

*Figura 23: Consulta de la tabla users en phpMyAdmin.*

📷 **Captura 23:** Colocar una imagen de la tabla `users`, ocultando los datos personales que no sea necesario mostrar.

## 🐙 Fase 7: GitHub

### 🆕 Paso 23: Preparación del repositorio

GitHub permite alojar el código fuente del proyecto y mantener un historial de los cambios realizados.

Se utilizó GitHub Desktop para administrar el repositorio desde Windows.

El proyecto local se encuentra en:

```text
C:\wamp64\www\LabLaravel
```

Antes de publicar los archivos, es importante comprobar que el repositorio corresponda a la carpeta correcta.

**Evidencia:**

*Figura 24: Proyecto LabLaravel ubicado en su carpeta local.*

📷 **Captura 24:** Colocar una imagen de la carpeta del proyecto o de su configuración en GitHub Desktop.

### 📂 Paso 24: Revisión de los archivos

En GitHub Desktop se revisan los archivos detectados como nuevos o modificados.

Antes de realizar un commit, se debe verificar que los cambios correspondan al proyecto y que no se incluyan archivos con contraseñas o credenciales privadas.

El archivo `.env` debe permanecer fuera del repositorio público cuando contiene información sensible. También se debe revisar el archivo `.gitignore`.

**Evidencia:**

*Figura 25: Revisión de los archivos modificados en GitHub Desktop.*

📷 **Captura 25:** Colocar una imagen de la lista de cambios del repositorio.

### 📤 Paso 25: Commit de los cambios

El commit permite registrar un conjunto de cambios dentro del historial de Git.

En GitHub Desktop se escribe un resumen que describa las modificaciones realizadas y se selecciona la opción para confirmar los cambios.

Un ejemplo de mensaje es:

```text
Laboratorio 2: implementación de login y registro en Laravel
```

**Evidencia:**

*Figura 26: Registro del commit del proyecto en GitHub Desktop.*

📷 **Captura 26:** Colocar una imagen del commit creado.

### 🌐 Paso 26: Publicación del repositorio

Después de revisar los archivos y registrar el commit, se publica el repositorio en GitHub o se suben los cambios al repositorio remoto existente.

Al finalizar, se puede abrir la página del repositorio para verificar que los archivos se encuentren disponibles.

**Evidencia:**

*Figura 27: Repositorio del proyecto publicado en GitHub.*

📷 **Captura 27:** Colocar una imagen del repositorio público con el archivo `README.md` visible.

**Enlace del repositorio:** Agregar aquí la URL real de tu repositorio de GitHub.

## 🚑 Errores comunes

Durante el desarrollo de aplicaciones Laravel pueden presentarse problemas relacionados con la configuración del entorno, la base de datos, los recursos frontend y GitHub.

| Error | Posible causa | Solución |
|---|---|---|
| `Could not open input file: artisan` | La terminal no está ubicada en la carpeta del proyecto. | Ejecutar `cd C:\wamp64\www\LabLaravel`. |
| `php is not recognized` | PHP no está disponible en la variable Path. | Revisar la configuración de PHP en Windows. |
| Error de conexión con MySQL | El servidor está apagado o los datos de conexión son incorrectos. | Iniciar MySQL y revisar el archivo `.env`. |
| `Unknown database` | La base de datos no existe o el nombre es incorrecto. | Comprobar el nombre de la base y el valor de `DB_DATABASE`. |
| Los cambios de CSS no aparecen | Los recursos no se han actualizado o no se están cargando correctamente. | Revisar los archivos CSS y la configuración de Vite. |
| Error al ejecutar npm | Node.js o npm no están disponibles correctamente. | Verificar `node -v` y `npm -v`. |
| La página de login no carga | Puede faltar una ruta o existir un error en la vista. | Revisar las rutas y los archivos Blade de autenticación. |
| Los cambios no aparecen en GitHub | Los archivos no se han confirmado o publicado. | Revisar los cambios, crear un commit y subirlo al repositorio remoto. |
| Se intenta publicar el archivo `.env` | El archivo no está excluido correctamente. | Revisar `.gitignore` y evitar publicar credenciales. |

## 🏁 Conclusión

El desarrollo de este laboratorio permitió trabajar con Laravel y comprender la estructura básica de una aplicación web basada en el patrón Modelo Vista Controlador (MVC).

Se verificó la instalación del framework, se revisó la configuración de las migraciones y se trabajó con las vistas de inicio de sesión y registro. Además, se abordó la personalización de la interfaz para adaptar la apariencia de los formularios al diseño deseado.

También se revisó el uso de herramientas como WampServer, MySQL, phpMyAdmin, Composer, Node.js, npm, Visual Studio Code y GitHub Desktop.

En conclusión, el laboratorio contribuyó al aprendizaje de los conceptos básicos del desarrollo web con Laravel, la organización del código, la gestión de bases de datos y el control de versiones.

## 📚 Referencias

- Laravel. (s. f.). *Laravel documentation*. https://laravel.com/docs
- Laravel. (s. f.). *Database: Migrations*. https://laravel.com/docs/13.x/migrations
- Laravel. (s. f.). *Blade templates*. https://laravel.com/docs/13.x/blade
- Laravel. (s. f.). *Routing*. https://laravel.com/docs/13.x/routing
- Laravel UI. (s. f.). *Laravel UI*. https://github.com/laravel/ui
- WampServer. (s. f.). *WampServer*. https://www.wampserver.com/en/
- Composer. (s. f.). *Composer documentation*. https://getcomposer.org/doc/
- Node.js. (s. f.). *Node.js documentation*. https://nodejs.org/en
- Bootstrap. (s. f.). *Bootstrap documentation*. https://getbootstrap.com/docs/
- Git. (s. f.). *Git documentation*. https://git-scm.com/doc
- GitHub. (s. f.). *GitHub Docs*. https://docs.github.com

---

<div align="center">

**UNIVERSIDAD TECNOLÓGICA DE PANAMÁ**

*Facultad de Ingeniería de Sistemas Computacionales*

**Laboratorio #2 — Desarrollo Web**

</div>
