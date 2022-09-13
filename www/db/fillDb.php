<?php

include 'conn.php';
$sql = "CREATE DATABASE sistema";

$sql = "CREATE TABLE usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    passwrd VARCHAR(50),
    celular VARCHAR(50),
    max_sesiones INT(6),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


$sql = "CREATE TABLE sesiones (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$sql = "INSERT INTO usuarios (nombre, apellido, email, passwrd, celular, max_sesiones)
VALUES ('John', 'Doe', 'acruz@gmail.com', '123456', '123456', 3)";

if (mysqli_query($connection, $sql)) {
    echo "Tabla creadas correctamente Gracias por isntalar el sistema";
} else {
    echo "Error creando tablas: " . mysqli_error($connection);
}