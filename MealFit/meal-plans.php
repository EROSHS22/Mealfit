<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Plans</title>
    <link rel="stylesheet" href="meal-plans.css">
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
    <section id="intro">
        <div class="intro-content">
            <img src="img/1.jpg" alt="Meal Image 1">
        </div>
        <div class="intro-text">
            <h1>¡Más de 100 comidas para elegir cada semana!</h1>
            <p>Explore varias opciones deliciosas y personalice su plan según sus necesidades.</p>
        </div>
    </section>

    <section id="plans">
        <div class="plan" id="protein">
            <div class="plan-background" style="background-image: url('img/BG1.jpg');">
                <h2>PROTEIN+</h2>
                <p>Comidas ricas en proteínas para impulsar tu rendimiento.</p>
                <a href="menu.php"><button>VER PLAN</button></a>
            </div>
        </div>
        <div class="plan" id="vegan">
            <div class="plan-background" style="background-image: url('img/BG2.jpg');">
                <h2>VEGAN</h2>
                <p>Comidas a base de plantas, llenas de sabor.</p>
                <a href="menu1.php"><button>VER PLAN</button></a>
            </div>
        </div>
        <div class="plan" id="bulk">
            <div class="plan-background" style="background-image: url('img/BG3.jpg  ');">
                <h2>BULK</h2>
                <p>Comidas altas en calorías que te ayudarán a ganar peso.</p>
                <a href="menu2.php"><button>VER PLAN</button></a>            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 MealFit. Todos los derechos reservados.</p>
            <div class="footer-links">
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos de Servicio</a>
                <a href="#">Contacto</a>
            </div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
