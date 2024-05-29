<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles6.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
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

<div class="checkout-container">
    <h1>CHECKOUT</h1>    
    <div class="order-summary">
        <h2>ORDEN</h2>
        <div class="summary-details">
            <?php
            if (isset($_POST['total'])) {
                $total = $_POST['total'];
                $descuentos = isset($_POST['descuentos']) ? $_POST['descuentos'] : 0;
                $extras = isset($_POST['extras']) ? $_POST['extras'] : 0;
                echo '<p>Costos Extras: <span>$' . number_format($extras, 2) . '</span></p>';
                echo '<p>Descuentos: <span>-$' . number_format($descuentos, 2) . '</span></p>';
                echo '<p>Envio: <span>-</span></p>';
                echo '<p class="total">Total: <span>$' . number_format($total, 2) . '</span></p>';
            } else {
                echo '<p>No hay productos en el carrito.</p>';
            }
            ?>
        </div>
    </div>

    <div class="form-section">
        <h2 onclick="toggleSection('direccion')">Dirección de Envío</h2>
        <form method="post" action="procesar_formulario.php">
            <div id="direccion" class="hidden">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                <label for="direccion_envio">Dirección:</label>
                <input type="text" id="direccion_envio" name="direccion" required>
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" required>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
                <label for="codigo_postal">Código Postal:</label>
                <input type="text" id="codigo_postal" name="codigo_postal" required>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>
        </div>

        <div class="form-section">
            <h2 onclick="toggleSection('pago')">Información de Pago</h2>
            <div id="pago" class="hidden">
                <label for="numero_tarjeta">Número de tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" required>
                <label for="mes_exp">Mes de Expiración:</label>
                <select id="mes_exp" name="mes_exp" required>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <!-- Agrega más opciones para los meses -->
                </select>
                <label for="anio_exp">Año de Expiración:</label>
                <select id="anio_exp" name="anio_exp" required>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                    <!-- Agrega más opciones para los años -->
                </select>
                <label for="cvc">CVC:</label>
                <input type="text" id="cvc" name="cvc" required>
            </div>
        </div>

        <!-- Botón de realizar compra -->
        <div class="form-section">
            <button class="apply-button" type="submit">Compra</button>
        </div>
    </form>

</div>

<script>
    function toggleSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section.classList.contains('hidden')) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    }
</script>
</body>
</html>
