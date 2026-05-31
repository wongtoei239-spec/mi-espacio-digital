# Mi Espacio Digital

## Descripción general

Mi Espacio Digital es un sitio web personal desarrollado con HTML5, CSS, PHP y MySQL. El proyecto tiene como finalidad presentar información básica sobre mí, mostrar una pequeña sección de hobbies y permitir que una persona pueda enviar un mensaje mediante un formulario de contacto funcional.

La idea de esta práctica es aplicar varios temas trabajados en Desarrollo Web, como la estructura semántica de una página, el uso de estilos CSS, el procesamiento de formularios con PHP y el almacenamiento de información en una base de datos MySQL.

## Funcionalidades principales

El sitio cuenta con las siguientes funcionalidades:

- Página principal con información personal.
- Sección de hobbies.
- Foto personal dentro de la página de inicio.
- Página de contacto con formulario funcional.
- Validación básica en el cliente mediante HTML5.
- Validación en servidor usando PHP.
- Registro de mensajes en una base de datos MySQL.
- Página para visualizar los mensajes guardados desde la base de datos.
- Protección básica de la sección de mensajes mediante contraseña.
- Diseño visual personalizado con CSS.

## Tecnologías utilizadas

Para desarrollar este proyecto se utilizaron las siguientes herramientas:

- HTML5.
- CSS3.
- PHP.
- MySQL.
- XAMPP.
- phpMyAdmin.
- Visual Studio Code.

## Estructura del proyecto

```text
mi-espacio-digital/
│
├── app/
│   ├── conexion.php
│   └── funciones.php
│
├── public/
│   ├── estilos.css
│   └── img/
│       └── perfil.jpeg
│
├── sql/
│   └── base_contacto.sql
│
├── index.php
├── contacto.php
├── guardar_contacto.php
├── mensajes.php
├── salir_mensajes.php
└── README.md
```

## Explicación de la estructura

La carpeta `app` contiene los archivos de apoyo del sistema. En `conexion.php` se realiza la conexión con la base de datos MySQL, mientras que `funciones.php` contiene funciones reutilizables para limpiar datos, validar correos y mostrar mensajes de forma segura.

La carpeta `public` contiene los archivos públicos del sitio. En este caso, se encuentra el archivo `estilos.css`, que define el diseño visual de la página, y la carpeta `img`, donde se guarda la foto personal utilizada en la página principal.

La carpeta `sql` contiene el archivo `base_contacto.sql`, que permite crear la base de datos y la tabla necesaria para guardar los mensajes enviados desde el formulario.

## Páginas del sitio

El archivo `index.php` corresponde a la página principal. En esta sección se muestra una presentación personal, una foto, una breve biografía y algunos hobbies. También se incluye un enlace hacia el formulario de contacto.

El archivo `contacto.php` contiene el formulario donde el usuario puede ingresar su nombre, correo y mensaje. Este formulario usa validaciones básicas de HTML5 y envía los datos al archivo `guardar_contacto.php`.

El archivo `guardar_contacto.php` procesa la información enviada desde el formulario. Primero valida que los campos no estén vacíos, revisa que el correo tenga un formato correcto y luego guarda el mensaje en la base de datos mediante una consulta preparada.

El archivo `mensajes.php` muestra los mensajes registrados en la base de datos. Esta sección está protegida con una contraseña básica, pues los mensajes pueden contener datos personales como nombres y correos, por lo que no sería adecuado dejarlos visibles al público.

El archivo `salir_mensajes.php` permite bloquear nuevamente la sección de mensajes, eliminando el acceso temporal guardado en la sesión.

## Base de datos

La base de datos utilizada se llama `mi_espacio_digital_db` y contiene una tabla llamada `mensajes_contacto`.

### Campos de la tabla

- `id_mensaje`
- `nombre`
- `correo`
- `mensaje`
- `fecha_envio`

## Instalación local

Para probar el proyecto de forma local se deben seguir estos pasos:

1. Copiar la carpeta `mi-espacio-digital` dentro de la carpeta `htdocs` de XAMPP.

   Ejemplo:

   `C:\xampp\htdocs\mi-espacio-digital`

2. Abrir el panel de XAMPP e iniciar los servicios de Apache y MySQL.

3. Ingresar a phpMyAdmin desde el navegador:

   `http://localhost/phpmyadmin`

4. Importar el archivo de base de datos ubicado en:

   `sql/base_contacto.sql`

5. Verificar que se haya creado la base de datos:

   `mi_espacio_digital_db`

6. Abrir el proyecto en el navegador:

   `http://localhost/mi-espacio-digital/`

## Validaciones aplicadas

El formulario de contacto cuenta con validación básica en el navegador, ya que los campos de nombre, correo y mensaje están marcados como obligatorios. Además, el campo de correo usa el tipo `email`, lo que ayuda a validar el formato desde HTML5.

En el servidor también se aplican validaciones con PHP. El sistema verifica que los campos no estén vacíos, valida el formato del correo y comprueba que el mensaje tenga una longitud mínima. Además, se limpian los datos recibidos para evitar que se muestren caracteres peligrosos en la página.

## Seguridad básica

El proyecto utiliza consultas preparadas para guardar los mensajes en MySQL, lo que ayuda a reducir riesgos de inyección SQL. También se aplican funciones para limpiar la información antes de mostrarla en pantalla.

Como mejora adicional, la sección de mensajes fue protegida con una contraseña sencilla, pues ahí se muestran datos enviados por los usuarios. Esto permite que el sitio siga mostrando información dinámica desde la base de datos, pero sin dejar los mensajes expuestos directamente al público.

La contraseña de prueba para revisar los mensajes es:

`admin123`

## Pruebas realizadas

Durante la prueba del proyecto se verificó que la página principal cargue correctamente, que la foto personal se muestre en la sección inicial y que los enlaces del menú funcionen.

También se comprobó que el formulario de contacto permita enviar datos válidos, que muestre un mensaje de confirmación y que los datos se registren correctamente en la tabla `mensajes_contacto` de MySQL.

Finalmente, se revisó que la sección `mensajes.php` cargue los mensajes desde la base de datos y que solicite contraseña antes de mostrarlos.

## Enlace del proyecto desplegado

El proyecto será subido a un hosting gratuito. Una vez publicado, el enlace activo se colocará aquí:

`https://miespaciodigital.infinityfreeapp.com/`

## Mi opinión personal

Este proyecto me permitió practicar de forma más completa el desarrollo de una página web con PHP y MySQL. Aunque es un sitio sencillo, me ayudó a reforzar el uso de formularios, validaciones, conexión con base de datos y organización de archivos.

También me pareció importante agregar una protección básica a la sección de mensajes, pues los datos enviados desde un formulario de contacto no deberían quedar visibles para cualquier persona. Con esto, el proyecto no solo cumple con lo solicitado, sino que también queda un poco más ordenado y seguro.
