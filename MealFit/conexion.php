<?php
$conexion = mysqli_connect("localhost", "root", "", "login_system");

// Verificar la conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
