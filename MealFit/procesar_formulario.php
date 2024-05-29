<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado
if(isset($_SESSION['usuario_id'])) {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $mes_exp = $_POST['mes_exp'];
    $anio_exp = $_POST['anio_exp'];
    $cvc = $_POST['cvc'];

    // Obtener el ID del usuario de la sesión
    $usuario_id = $_SESSION['usuario_id'];

    // Insertar la información de dirección en la tabla "direccion"
    $sql_direccion = "INSERT INTO direccion (usuario_id, nombre, apellido, direccion, ciudad, estado, codigo_postal, telefono) 
                      VALUES ('$usuario_id', '$nombre', '$apellido', '$direccion', '$ciudad', '$estado', '$codigo_postal', '$telefono')";

    if (mysqli_query($conexion, $sql_direccion)) {
        // Eliminar los productos del carrito de la base de datos
        $sql_eliminar_carrito = "DELETE FROM carrito WHERE user_id = '$usuario_id'";
        if (mysqli_query($conexion, $sql_eliminar_carrito)) {
            echo "Carrito vaciado correctamente.<br>";
        } else {
            echo "Error al vaciar el carrito: " . mysqli_error($conexion);
        }

        // Redirigir al usuario a la página de inicio
        header("Location: index.php");
        exit(); // Asegúrate de salir después de la redirección
    } else {
        echo "Error al guardar la información de dirección: " . mysqli_error($conexion);
    }

    // Insertar la información de pago en la tabla "informacion_pago"
    $sql_pago = "INSERT INTO informacion_pago (usuario_id, numero_tarjeta, exp_mes, exp_anio, cvc) 
                 VALUES ('$usuario_id', '$numero_tarjeta', '$mes_exp', '$anio_exp', '$cvc')";

    if (mysqli_query($conexion, $sql_pago)) {
        echo "Información de pago guardada correctamente.<br>";
    } else {
        echo "Error al guardar la información de pago: " . mysqli_error($conexion);
    }

} else {
    echo "El usuario no está autenticado.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
