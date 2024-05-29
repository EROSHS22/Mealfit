<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Iniciar la sesión
session_start();

// Obtener datos del formulario de inicio de sesión
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consulta preparada para evitar inyección SQL
$stmt = $conexion->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si se encontró el usuario
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $hash_contraseña = $row['password'];

    // Verificar la contraseña hasheada
    if (password_verify($contraseña, $hash_contraseña)) {
        // Establecer el ID del usuario en la sesión
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario'] = $usuario;
        $stmt->close();
        $conexion->close();
        header("Location: index.php");
        exit();
    }
}

// Cerrar la conexión antes de mostrar el mensaje emergente
$stmt->close();
$conexion->close();

// Mostrar un mensaje emergente de error utilizando JavaScript
echo '<script>alert("Error en la autenticación. Por favor, inténtalo de nuevo."); window.location.href = "login.php";</script>';
?>
