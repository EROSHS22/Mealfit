<?php
// Incluir el archivo de conexión a la base de datos
include('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST['usuarior'];
    $contraseña = $_POST['contraseñar'];
    $contraseña_confirmar = $_POST['contraseñar_confirmar'];

    // Verificar si las contraseñas coinciden
    if ($contraseña != $contraseña_confirmar) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
    } else {
        // Hash de la contraseña
        $hash_contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

        // Preparar la consulta SQL para la inserción
        $sql = "INSERT INTO users (username, password) VALUES ('$usuario', '$hash_contraseña')";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "<script>alert('Registro exitoso');</script>";
            // Redireccionar al usuario al index.html después de 2 segundos
            header("refresh:2;url=index.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }
}
?>
