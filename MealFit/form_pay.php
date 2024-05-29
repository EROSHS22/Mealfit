<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header con Logo y Opciones</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" href="styles5.css">
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
        <div class="cart-container">
            <div class="cart-item">
                <img src="dingo_dog_bones.png" alt="Dingo Dog Bones">
                <div class="cart-item-info">
                    <h4>Dingo Dog Bones</h4>
                    <p>The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
                </div>
                <div class="cart-item-details">
                    <span class="price">$12.99</span>
                    <input type="number" value="2">
                    <button class="remove-btn">Remove</button>
                    <span class="total-price">$25.98</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="nutro_adult_lamb_rice.png" alt="Nutro Adult Lamb and Rice Dog Food">
                <div class="cart-item-info">
                    <h4>Nutro™ Adult Lamb and Rice Dog Food</h4>
                    <p>Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
                </div>
                <div class="cart-item-details">
                    <span class="price">$45.99</span>
                    <input type="number" value="1">
                    <button class="remove-btn">Remove</button>
                    <span class="total-price">$45.99</span>
                </div>
            </div>
            <button class="checkout-btn">Pagar</button>
        </div>
        
        <div class="payment-form-container">
            <h3>Forma de Pago</h3>
            <form>
                <label for="card-name">Nombre en la Tarjeta</label>
                <input type="text" id="card-name" name="card-name" required>
                
                <label for="card-number">Número de Tarjeta</label>
                <input type="text" id="card-number" name="card-number" required>
                
                <div class="expiry-cvv">
                    <div>
                        <label for="expiry-date">Fecha de Expiración</label>
                        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
                    </div>
                    <div>
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" required>
                    </div>
                </div>
                
                <button type="submit" class="pay-btn">Realizar Pago</button>
            </form>
        </div>
    </body>
</html>
