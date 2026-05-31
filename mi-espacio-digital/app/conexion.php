<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "mi_espacio_digital_db";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("No se pudo conectar con la base de datos.");
}

$conexion->set_charset("utf8mb4");
?>