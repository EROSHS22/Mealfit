<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu BULK</title>
    <link rel="stylesheet" href="Styles3.css">
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
            <li><a href="meal-plans.php">MEAL PLANS</a></li>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if(isset($_SESSION['usuario'])) {
                // Si el usuario ha iniciado sesión, mostrar su nombre de usuario
                echo '<li>Bienvenido, ' . $_SESSION['usuario'] . '!</li>';
                echo '<li><a href="logout.php">Cerrar sesión</a></li>';
                echo '<li><a href="cart.php">Ver carrito</a></li>'; // Agregamos el enlace para ver el carrito
            } else {
                // Si el usuario no ha iniciado sesión, mostrar enlace para iniciar sesión
                echo '<li><a href="login.php">LOGIN</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>


    <div class="tags-container">
        <div class="tag protein">
            <a href="menu.php"><img src="img/PROTEIN-_color.svg" alt="Protein+"></a>
        </div>
        <div class="tag">
            <a href="menu1.php"><img src="img/Vegan-S-_color.svg" alt="Vegan"></a>
        </div>
        <div class="tag">
            <a href="menu2.php"><img src="img/Bulk_color.svg" alt="Bulk"></a>
        </div>
    </div>

    <div class="menu-container">
        <h2>Menu : Mayo 19 - Mayo 24</h2>
        <p>Nuevo menú creado por el chef cada semana</p>
        <p>El plan para aumentar su consumo de proteínas, verduras, avena y todo lo demás.</p>
        <div class="cards-container">
            <div class="card">
                <img src="img/Cod-16oz-800x800.jpg" alt="Cod">
                <div class="card-info">
                    <p>Protein : 23g | Carbs : 52g</p>
                    <h3>ATREVIDO POLLO TIKKA MASALA CON ARROZ JAZMÍN Y CARDAMOMO AZAFRÁN </h3>
                    <a href="https://www.rappi.com.mx/?utm_source=google&pid=google&utm_medium=cpc&af_channel=cpc&utm_campaign=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&c=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&utm_id=18543495016&af_c_id=18543495016&utm_term=rappi&af_keywords=rappi&utm_content=e&af_ad=e&gad_source=1&gclid=CjwKCAjw9cCyBhBzEiwAJTUWNbZppurwwml5Ko9mIr3srZ0y5CcifkuEAXw0eUkNV_ItCli9i9DwehoCB1MQAvD_BwE"><button class="add-to-cart">Agregar al carrito</button></a>
                </div>
            </div>
            <div class="card">
                <img src="img/Beef-1-800x800.jpg" alt="Beef">
                <div class="card-info">
                    <p>Protein : 28g | Carbs : 0g</p>
                   <h3>CARNE DE RES (16OZ)</h3>
                   <a href="https://www.rappi.com.mx/?utm_source=google&pid=google&utm_medium=cpc&af_channel=cpc&utm_campaign=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&c=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&utm_id=18543495016&af_c_id=18543495016&utm_term=rappi&af_keywords=rappi&utm_content=e&af_ad=e&gad_source=1&gclid=CjwKCAjw9cCyBhBzEiwAJTUWNbZppurwwml5Ko9mIr3srZ0y5CcifkuEAXw0eUkNV_ItCli9i9DwehoCB1MQAvD_BwE"><button class="add-to-cart">Agregar al carrito</button></a>
                </div>
            </div>
            <div class="card">
                <img src="img/ChickenBreast-1-800x800.jpg" alt="Chicken Breast">
                <div class="card-info">
                    <p>Protein : 42g | Carbs : 1g</p>
                    <h3>PECHUGA DE POLLO (16OZ)</h3>
                    <a href="https://www.rappi.com.mx/?utm_source=google&pid=google&utm_medium=cpc&af_channel=cpc&utm_campaign=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&c=CX_MX_PR_SE_GO_SEB_DSK_ALL_RAP_ALL_NA_MX001_EXA&utm_id=18543495016&af_c_id=18543495016&utm_term=rappi&af_keywords=rappi&utm_content=e&af_ad=e&gad_source=1&gclid=CjwKCAjw9cCyBhBzEiwAJTUWNbZppurwwml5Ko9mIr3srZ0y5CcifkuEAXw0eUkNV_ItCli9i9DwehoCB1MQAvD_BwE"><button class="add-to-cart">Agregar al carrito</button></a>
                </div>
        </div>
    </div>


    <script src="cart.js"></script>
</body>
</html>
