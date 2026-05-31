<?php
require_once("app/funciones.php");

$mensaje = $_GET['mensaje'] ?? "";
$tipo = $_GET['tipo'] ?? "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Mi Espacio Digital</title>
    <link rel="stylesheet" href="public/estilos.css">
</head>
<body>

<header class="encabezado-simple">
    <nav class="barra">
        <div class="logo">Mi Espacio Digital</div>

        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contacto.php" class="activo">Contacto</a></li>
            <li><a href="mensajes.php">Mensajes</a></li>
        </ul>
    </nav>
</header>

<main class="contenedor-contacto">
    <section class="panel-contacto">
        <div class="info-contacto">
            <span class="etiqueta">Formulario PHP</span>
            <h1>Contáctame</h1>

            <p>
                En esta sección puedes enviar un mensaje mediante un formulario funcional.
                Los datos se validan en el navegador y también en el servidor con PHP.
            </p>

            <div class="dato-extra">
                <strong>Campos requeridos:</strong>
                <span>Nombre, correo y mensaje.</span>
            </div>

            <div class="dato-extra">
                <strong>Registro:</strong>
                <span>El mensaje se almacena en MySQL.</span>
            </div>
        </div>

        <section class="formulario-box">
            <h2>Enviar mensaje</h2>

            <?php if ($mensaje !== ""): ?>
                <div class="alerta <?= $tipo === 'ok' ? 'correcto' : 'error'; ?>">
                    <?= limpiarCampo($mensaje); ?>
                </div>
            <?php endif; ?>

            <form action="guardar_contacto.php" method="POST">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre" 
                        maxlength="100" 
                        required
                    >
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo" 
                        name="correo" 
                        maxlength="120" 
                        required
                    >
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        rows="6" 
                        maxlength="1000" 
                        required
                    ></textarea>
                </div>

                <button type="submit">Enviar mensaje</button>
            </form>
        </section>
    </section>
</main>

<footer class="pie">
    <p>Mi Espacio Digital &copy; 2026 | Formulario conectado con PHP y MySQL</p>
</footer>

</body>
</html>