<?php
function limpiarCampo($valor)
{
    return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}

function correoValido($correo)
{
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

function mensajeSeguro($texto)
{
    return nl2br(htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8'));
}
?>