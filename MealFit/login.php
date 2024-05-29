<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">

</head>
<body>
<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start(); // Iniciar sesión solo si no está activa
}
?>
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

    <div class="login-box">
        <h2>Login</h2>
        <form action="submit.php" method="post">
          <div class="user-box">
            <input type="text" name="usuario" required="">
            <label>Usuario</label>
          </div>
          <div class="user-box">
            <input type="password" name="contraseña" required="">
            <label>Contraseña</label>
          </div>
          <a href="register.php"><p>No estás registrado?</p></a>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Ingresar" style="background: transparent; border: none; color: white;">
          </a>
        </form>
      </div>

</body>
</html>
