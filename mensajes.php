<?php
session_start();

require_once("app/conexion.php");
require_once("app/funciones.php");

$clave_admin = "admin123";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clave_ingresada = $_POST['clave_admin'] ?? "";

    if ($clave_ingresada === $clave_admin) {
        $_SESSION['acceso_mensajes'] = true;
        header("Location: mensajes.php");
        exit;
    } else {
        $error = "La contraseña ingresada no es correcta.";
    }
}

$acceso_permitido = isset($_SESSION['acceso_mensajes']) && $_SESSION['acceso_mensajes'] === true;

if ($acceso_permitido) {
    $sql = "SELECT id_mensaje, nombre, correo, mensaje, fecha_envio 
            FROM mensajes_contacto 
            ORDER BY fecha_envio DESC";

    $resultado = $conexion->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes recibidos | Mi Espacio Digital</title>
    <link rel="stylesheet" href="public/estilos.css">
</head>
<body>

<header class="encabezado-simple">
    <nav class="barra">
        <div class="logo">Mi Espacio Digital</div>

        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="mensajes.php" class="activo">Mensajes</a></li>
        </ul>
    </nav>
</header>

<main class="seccion">

    <?php if (!$acceso_permitido): ?>

        <section class="panel-clave">
            <span class="etiqueta">Zona protegida</span>
            <h1>Acceso a mensajes</h1>

            <p>
                Esta sección muestra los mensajes enviados desde el formulario de contacto,
                por eso se protegió con una contraseña básica para evitar que los datos queden visibles al público.
            </p>

            <?php if ($error !== ""): ?>
                <div class="alerta error">
                    <?= limpiarCampo($error); ?>
                </div>
            <?php endif; ?>

            <form action="mensajes.php" method="POST" class="formulario-clave">
                <div class="campo">
                    <label for="clave_admin">Contraseña de acceso</label>
                    <input 
                        type="password" 
                        id="clave_admin" 
                        name="clave_admin" 
                        required
                    >
                </div>

                <button type="submit">Ver mensajes</button>
            </form>
        </section>

    <?php else: ?>

        <section class="cabecera-listado">
            <span class="etiqueta">Datos desde MySQL</span>
            <h1>Mensajes recibidos</h1>

            <p>
                En esta sección se muestran los mensajes enviados desde el formulario de contacto.
                Los datos no están escritos manualmente, sino que se consultan directamente desde la base de datos.
            </p>

            <a href="salir_mensajes.php" class="boton-salida-mensajes">
                Bloquear mensajes
            </a>
        </section>

        <section class="listado-mensajes">
            <?php if ($resultado && $resultado->num_rows > 0): ?>

                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <article class="mensaje-card">
                        <div class="mensaje-top">
                            <h2><?= limpiarCampo($fila['nombre']); ?></h2>
                            <span><?= limpiarCampo($fila['fecha_envio']); ?></span>
                        </div>

                        <p class="correo-mensaje">
                            <?= limpiarCampo($fila['correo']); ?>
                        </p>

                        <p class="texto-mensaje">
                            <?= mensajeSeguro($fila['mensaje']); ?>
                        </p>
                    </article>
                <?php endwhile; ?>

            <?php else: ?>
                <article class="mensaje-card">
                    <h2>No hay mensajes registrados</h2>
                    <p class="texto-mensaje">
                        Cuando alguien envíe el formulario de contacto, el mensaje aparecerá en esta sección.
                    </p>
                </article>
            <?php endif; ?>
        </section>

    <?php endif; ?>

</main>

<footer class="pie">
    <p>Mi Espacio Digital &copy; 2026 | Mensajes cargados desde MySQL</p>
</footer>

</body>
</html>

<?php
$conexion->close();
?>