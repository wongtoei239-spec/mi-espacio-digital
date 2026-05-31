<?php
session_start();

unset($_SESSION['acceso_mensajes']);

header("Location: mensajes.php");
exit;
?>