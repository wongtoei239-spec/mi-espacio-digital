<?php
require_once("app/conexion.php");
require_once("app/funciones.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

$nombre = limpiarCampo($_POST['nombre'] ?? "");
$correo = trim($_POST['correo'] ?? "");
$mensaje = limpiarCampo($_POST['mensaje'] ?? "");

if ($nombre === "" || $correo === "" || $mensaje === "") {
    header("Location: contacto.php?tipo=error&mensaje=Todos los campos son obligatorios.");
    exit;
}

if (!correoValido($correo)) {
    header("Location: contacto.php?tipo=error&mensaje=Ingrese un correo electrónico válido.");
    exit;
}

if (strlen($mensaje) < 10) {
    header("Location: contacto.php?tipo=error&mensaje=El mensaje debe tener al menos 10 caracteres.");
    exit;
}

$stmt = $conexion->prepare(
    "INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES (?, ?, ?)"
);

$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    $stmt->close();
    $conexion->close();

    header("Location: contacto.php?tipo=ok&mensaje=Tu mensaje fue enviado y guardado correctamente.");
    exit;
}

$stmt->close();
$conexion->close();

header("Location: contacto.php?tipo=error&mensaje=No se pudo guardar el mensaje. Intente nuevamente.");
exit;
?>