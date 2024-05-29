<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(); // Iniciar sesión solo si no está activa
    }

    if (isset($_SESSION['usuario'])) {
        $productName = $_POST['productName'];
        $protein = $_POST['protein'];
        $carbs = $_POST['carbs'];
        $price = $_POST['price']; // Recuperar el precio del formulario
        $user_id = $_SESSION['usuario']; // Id del usuario

        require_once('conexion.php');

        if ($conexion) {
            $query = "INSERT INTO carrito (productName, protein, carbs, price, user_id) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conexion, $query);
            mysqli_stmt_bind_param($stmt, "siiis", $productName, $protein, $carbs, $price, $user_id);

            if (mysqli_stmt_execute($stmt)) {
                echo "Producto agregado al carrito exitosamente";
            } else {
                echo "Error al agregar el producto al carrito: " . mysqli_error($conexion);
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conexion);
        } else {
            echo "Error de conexión a la base de datos";
        }
    } else {
        echo "Usuario no autenticado";
    }
} else {
    echo "Método de solicitud incorrecto";
}

?>