<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles3.css">
    <script>
    function removeFromCart(productId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    location.reload();
                }
            }
        };
        xhr.open('POST', 'remove_from_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('productId=' + encodeURIComponent(productId));
    }

    function updateQuantity(productId, newQuantity) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    if (xhr.responseText === "success") {
                        location.reload(); // Recargar la página para reflejar los cambios
                    }
                }
            }
        };
        xhr.open('POST', 'update_quantity.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('productId=' + encodeURIComponent(productId) + '&quantity=' + encodeURIComponent(newQuantity));
    }
    </script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Tu Logo"></a>
    </div>
    <nav>
        <ul>
            
            <?php
            if (isset($_SESSION['usuario'])) {
                echo '<li>Bienvenido, ' . $_SESSION['usuario'] . '!</li>';
                echo '<li><a href="meal-plans.php">MEAL PLANS</a></li>';
                echo '<li><a href="logout.php">Cerrar sesión</a></li>';
                echo '<li><a href="cart.php">Ver carrito</a></li>';
            } else {
                echo '<li><a href="login.php">LOGIN</a></li>';
            }
            
            ?>
        </ul>
    </nav>
</header>

<div class="cart-container">
    <form action="checkout.php" method="post">
    <?php
    require_once('conexion.php');

    if (isset($_SESSION['usuario']) && $conexion) {
        $usuario = $_SESSION['usuario'];

        $query = "SELECT id, productName, protein, carbs, quantity, price FROM carrito WHERE user_id = ?";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $total = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $total += $row['price'] * $row['quantity'];
                echo '<div class="cart-item">';
                echo '<div class="cart-item-info">';
                echo '<h4>' . $row['productName'] . '</h4>';
                echo '</div>';
                echo '<div class="cart-item-details">';
                echo '<p>Proteína: ' . $row['protein'] . 'g | Carbohidratos: ' . $row['carbs'] . 'g</p>';
                echo '<p>Precio: $' . $row['price'] . '</p>';
                echo '<p>Cantidad: <input type="number" value="' . $row['quantity'] . '" min="1" onchange="updateQuantity(' . $row['id'] . ', this.value)"></p>';
                echo '<button class="remove-btn" type="button" onclick="removeFromCart(' . $row['id'] . ')">Eliminar</button>';
                echo '</div>';
                echo '</div>';
                echo '<input type="hidden" name="products[]" value="' . $row['id'] . '">';
            }
            echo '<p>Total: $' . $total . '</p>';
            echo '<input type="hidden" name="total" value="' . $total . '">';
            echo '<button class="checkout-btn" type="submit">Pagar</button>';
        } else {
            echo '<p>Tu carrito está vacío</p>';
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    } else {
        echo '<p>Debes iniciar sesión para ver tu carrito</p>';
    }
    ?>
    </form>
</div>
</body>
</html>
