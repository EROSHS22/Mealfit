<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles7.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Tu Logo"></a>
    </div>
    <nav>
        <ul>
            <li><a href="meal-plans.php">MEAL PLANS</a></li>
            <?php
            session_start(); // Iniciar sesión

            // Verificar si el usuario ha iniciado sesión
            if(isset($_SESSION['usuario'])) {
                // Si el usuario ha iniciado sesión, mostrar su nombre de usuario
                echo '<li>Bienvenido, ' . $_SESSION['usuario'] . '!</li>';
                echo '<li><a href="logout.php">Cerrar sesión</a></li>';
            } else {
                // Si el usuario no ha iniciado sesión, mostrar enlace para iniciar sesión
                echo '<li><a href="login.php">LOGIN</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>

            <div class="confirmation-container">
                <div class="confirmation-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                        <path d="M9 11l3 3L22 4"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <h1>Pago realizado</h1>
                <p>El pago de tu pedido ha sido procesado con éxito. Muchas gracias por tu compra.</p>
            </div>

    <script src="cart.js"></script>
</body>
</html>
