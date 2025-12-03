<?php
$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "sistema_notas"
);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
