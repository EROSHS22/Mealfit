<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (isset($_SESSION['usuario'])) {
        $productId = $_POST['productId'];
        $user_id = $_SESSION['usuario'];

        require_once('conexion.php');

        if ($conexion) {
            $query = "DELETE FROM carrito WHERE id = ? AND user_id = ?";
            $stmt = mysqli_prepare($conexion, $query);
            mysqli_stmt_bind_param($stmt, "ii", $productId, $user_id);

            if (mysqli_stmt_execute($stmt)) {
                echo "success";
            } else {
                echo "error";
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conexion);
        } else {
            echo "db_error";
        }
    } else {
        echo "unauthenticated";
    }
} else {
    echo "invalid_method";
}
?>
