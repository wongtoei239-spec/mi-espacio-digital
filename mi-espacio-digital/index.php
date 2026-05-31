<?php
$titulo = "Mi Espacio Digital";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo; ?></title>
    <link rel="stylesheet" href="public/estilos.css">
</head>
<body>

<header class="encabezado">
    <nav class="barra">
        <div class="logo">Mi Espacio Digital</div>

        <ul class="menu">
            <li><a href="index.php" class="activo">Inicio</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="mensajes.php">Mensajes</a></li>
        </ul>
    </nav>

    <section class="hero">
        <div class="hero-texto">
            <span class="etiqueta">Página personal</span>
            <h1>Hola, soy Josip</h1>

            <p>
                Este es mi espacio digital, creado como parte de una práctica de Desarrollo Web,
                donde presento información personal y aplico conocimientos básicos de HTML5, CSS, PHP y MySQL.
            </p>

            <a href="contacto.php" class="boton-principal">Enviar mensaje</a>
        </div>

        <div class="hero-foto">
            <div class="foto-circulo">
                <img src="public/img/perfil.jpeg" alt="Foto personal de Josip">
            </div>
        </div>
    </section>
</header>

<main>
    <section class="seccion">
        <h2>Sobre mí</h2>

        <article class="tarjeta">
            <p>
                Soy estudiante de Tecnologías de la Información y me interesa aprender cómo se construyen
                aplicaciones web funcionales, claras y bien organizadas. En esta práctica trabajé una página
                personal con formulario de contacto, pues permite aplicar de forma sencilla la conexión entre
                una interfaz web, PHP y una base de datos MySQL.
            </p>

            <p>
                Me gusta explorar herramientas digitales, mejorar mis proyectos paso a paso y comprender cómo
                funcionan los sistemas desde su estructura interna; por eso, este sitio representa una pequeña
                muestra de lo aprendido en la asignatura.
            </p>
        </article>
    </section>

    <section class="seccion">
        <h2>Mis hobbies</h2>

        <div class="grid-hobbies">
            <article class="hobby">
                <h3>Tecnología</h3>
                <p>
                    Me interesa conocer nuevas herramientas, aplicaciones y soluciones digitales que faciliten
                    tareas cotidianas.
                </p>
            </article>

            <article class="hobby">
                <h3>Diseño web</h3>
                <p>
                    Me gusta probar colores, estilos y estructuras para que una página no solo funcione,
                    sino que también se vea agradable.
                </p>
            </article>

            <article class="hobby">
                <h3>Aprendizaje práctico</h3>
                <p>
                    Prefiero aprender construyendo proyectos, porque así puedo entender mejor la relación
                    entre teoría y práctica.
                </p>
            </article>
        </div>
    </section>

    <section class="seccion llamada">
        <h2>¿Quieres dejarme un mensaje?</h2>

        <p>
            Puedes usar el formulario de contacto para enviarme un comentario, una sugerencia o una consulta.
            El mensaje se guarda directamente en la base de datos.
        </p>

        <a href="contacto.php" class="boton-secundario">Ir al formulario</a>
    </section>
</main>

<footer class="pie">
    <p>Mi Espacio Digital &copy; 2026 | Proyecto académico de Desarrollo Web</p>
</footer>

</body>
</html>