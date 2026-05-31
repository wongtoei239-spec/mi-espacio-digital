CREATE DATABASE IF NOT EXISTS mi_espacio_digital_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE mi_espacio_digital_db;

CREATE TABLE IF NOT EXISTS mensajes_contacto (
    id_mensaje INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(120) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);