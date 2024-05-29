<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Protein+</title>
    <link rel="stylesheet" href="Styles3.css">
    <style>
        /* Estilos para el mensaje emergente */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
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

<!-- Contenedor del mensaje emergente -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hideModal()">&times;</span>
        <p id="modal-message">Producto agregado al carrito exitosamente</p>
    </div>
</div>

<div class="tags-container">
    <!-- Tags de menú -->
</div>

<div class="menu-container">
    <h2>Menú : Mayo 19 - Mayo 24</h2>
    <p>Nuevo menú creado por el chef cada semana</p>
    <p>El plan para aumentar su consumo de proteínas, verduras, avena y todo lo demás.</p>
    <div class="cards-container">
        <div class="card">
            <img src="img/Cod-16oz-800x800.jpg" alt="Cod">
            <div class="card-info">
                <p>Proteína : 28g | Carbohidratos : 1g | Precio: $10.99</p>
                <h3>Bacalao (16OZ)</h3>
                <button class="add-to-cart" onclick="addToCart('Bacalao', 28, 1, 10.99)">Agregar al carrito</button>
            </div>
        </div>
        <div class="card">
            <img src="img/Beef-1-800x800.jpg" alt="Cod">
            <div class="card-info">
                <p>Proteína : 28g | Carbohidratos : 0g | Precio: $12.99</p>
                <h3>Carne de res (16OZ)</h3>
                <button class="add-to-cart" onclick="addToCart('Carne de res', 28, 0, 12.99)">Agregar al carrito</button>
            </div>
        </div>
        <div class="card">
            <img src="img/ChickenBreast-1-800x800.jpg" alt="Cod">
            <div class="card-info">
                <p>Proteína : 42g | Carbohidratos : 1g | Precio: $9.99</p>
                <h3>Pechuga de pollo (16OZ)</h3>
                <button class="add-to-cart" onclick="addToCart('Pechuga de Pollo', 42, 1, 9.99)">Agregar al carrito</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Obtener el modal
    var modal = document.getElementById("myModal");

    // Función para mostrar el modal
    function showModal(message) {
        var modalMessage = document.getElementById("modal-message");
        modalMessage.textContent = message;
        modal.style.display = "block";
        setTimeout(function() {
            hideModal();
        }, 3000); // Cerrar el modal automáticamente después de 3 segundos
    }

    // Función para ocultar el modal
    function hideModal() {
        modal.style.display = "none";
    }

    // Función para agregar al carrito usando AJAX
    function addToCart(productName, protein, carbs, price) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    showModal("Producto agregado al carrito exitosamente");
                } else {
                    alert('Error al agregar el producto al carrito');
                }
            }
        };
        xhr.open('POST', 'add_to_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('productName=' + encodeURIComponent(productName) + '&protein=' + encodeURIComponent(protein) + '&carbs=' + encodeURIComponent(carbs)
        + '&price=' + encodeURIComponent(price));
    }
</script>
</body>
</html>
