<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MealFit</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" href="styles.css">
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
        <div class="cuadro">
            <!-- Parte izquierda -->
            <div class="izquierda">
                <p>¡Bienvenido a MealFit!</p>
                <p id="x">Prepara comidas saludables y deliciosas sin esfuerzo</p>
                <a href="meal-plans.php"><button class="boton">¡Comienza ahora!</button></a>
            </div>
            <!-- Parte derecha -->
            <div class="derecha">
                <img class="imagen" src="img/1.jpg" alt="Imagen">
            </div>
        </div>

        <div class="acerca">        
            <div class="acer">
                <h2>Acerca de MealFits</h2>
                <p>MealFit es una empresa que se dedica a proporcionar 
                soluciones de comidas saludables y planificación de comidas 
                para individuos y familias que buscan mejorar su dieta y estilo de vida. 
                Ofrecen una variedad de servicios que incluyen la entrega de comidas preparadas, planes de comidas personalizados, 
                recetas saludables y programas de alimentación diseñados para ayudar a alcanzar objetivos específicos, como perder 
                peso, aumentar la energía o mejorar el rendimiento deportivo.</p>
            </div>
            
        </div>
        <div class="acerca41">
            <div class="acer">
                <h2>Planificación de comidas personalizada</h2>
                <p>Crea un plan de comidas personalizado según tus necesidades y preferencias.</p>
            </div>
            <div class="acer">
                <h2>Recetas saludables</h2>
                <p>Descubre una amplia variedad de recetas saludables y deliciosas para inspirarte en la cocina.</p>
            </div>
            <div class="acer">
                <h2>Entrega a domicilio</h2>
                <p>Recibe tus comidas preparadas directamente en la puerta de tu casa, sin complicaciones.</p>
            </div>
            <div class="acer">
                <h2>Ingredientes frescos y de calidad</h2>
                <p>Utilizamos ingredientes frescos y de alta calidad para garantizar el sabor y la nutrición en cada comida.</p>
            </div>
        </div>

        <div class="servicios">
            <div class="acer" id="servicios1">
                <h2>Nuestros Servicios</h2>
                <p>planes para perder peso, ganar masa muscular o mantener una dieta equilibrada.</p>
            </div>
        </div>

        <div class="servicios">
            <div class="acer" id="servicios1">
                <h2>Plan de Pérdida de Peso</h2>
                <p>Alcanza tus metas de pérdida de peso con nuestro plan de comidas diseñado para ayudarte a quemar grasa y mantener una alimentación saludable.</p>
            </div>
            <div class="acer" id="servicios1">
                <h2>Plan de Ganancia Muscular</h2>
                <p>Aumenta tu masa muscular y obtén los nutrientes necesarios con nuestro plan de comidas diseñado para ayudarte a ganar fuerza y energía.</p>
            </div>
            <div class="acer" id="servicios1">
                <h2>Plan de Dieta Equilibrada</h2>
                <p>Mantén una alimentación equilibrada y saludable con nuestro plan de comidas diseñado para proporcionarte los nutrientes esenciales que tu cuerpo necesita.</p>
            </div>
        </div>
        
        <div class="acerca">
            <div class="acer">
                <h2>Testimonios</h2>
            </div>
        </div>
        <div class="acerca">
            <div class="acer">
                <h2>García</h2>
                <p>Gracias a MealFit, he logrado mantener una alimentación saludable sin tener que preocuparme por cocinar. Sus comidas son deliciosas y me han ayudado a perder peso de manera efectiva. </p>
            </div>
            <div class="acer">
                <h2>López</h2>
                <p> Estoy muy satisfecho con los servicios de MealFit. Sus comidas son variadas, nutritivas y me han ayudado a ganar masa muscular. Además, el equipo de MealFit siempre está dispuesto a responder mis preguntas y brindarme apoyo.</p>
            </div>
            <div class="acer">
                <h2>Laura Rodríguez</h2>
                <p>Recomiendo totalmente los servicios de MealFit. Sus comidas son frescas, sabrosas y me han ayudado a mantenerme en forma. Gracias a MealFit, he logrado mejorar mi salud y aumentar mi energía. </p>
            </div>
            <div class="acer">
                <h2>Carlos Martínez</h2>
                <p>Estoy encantado con MealFit. Sus comidas son convenientes, saludables y me han ayudado a ahorrar tiempo en la cocina. Además, el equipo de MealFit siempre está atento a mis necesidades y se asegura de que esté satisfecho con sus servicios. </p>
            </div>
        </div>

        <div class="servicios">
            <div class="acer" id="servicios1">
                <h2>¿Cómo Funciona MealFit?</h2>
                <p>En MealFit nos encargamos de todo el proceso, desde la selección de los alimentos frescos y saludables hasta la entrega de las comidas preparadas directamente a tu puerta. Aquí te explicamos paso a paso cómo funciona:</p>
            </div>
        </div>

        <div class="servicios">
            <div class="acer" id="servicios1">
                <h2>1. Elige tu plan</h2>
                <P>Selecciona el plan de comidas que mejor se adapte a tus necesidades y objetivos. Tenemos opciones para todos los estilos de vida, ya sea que estés buscando perder peso, ganar masa muscular o simplemente mantener una alimentación balanceada.</P>
            </div>
            <div class="acer" id="servicios1">
                <h2>2. Personaliza tu menú</h2>
                <p>Una vez que hayas elegido tu plan, podrás personalizar tu menú semanal. Selecciona tus comidas favoritas de nuestra amplia variedad de opciones saludables y deliciosas.</p>
            </div>
            <div class="acer" id="servicios1">
                <h2>3. Preparación y cocinado</h2>
                <p>Nuestro equipo de chefs expertos se encargará de preparar tus comidas con ingredientes frescos y de alta calidad. Utilizamos técnicas de cocina saludables para garantizar que cada plato sea nutritivo y sabroso.</p>
            </div>
            <div class="acer" id="servicios1"> 
                <h2>4. Entrega a domicilio</h2>
                <p>Una vez que tus comidas estén listas, las entregaremos directamente a tu puerta en el horario y lugar que elijas. Nos aseguramos de que tus comidas lleguen en perfectas condiciones, listas para ser disfrutadas.</p>
            </div>
        </div>

        <div class="faq">
            <div>
                <h2>FAQS</h2>
            </div>
            <div>
                <h2>
                    ¿Cuáles son los precios de los servicios de MealFit?
                </h2>
                <p id="f">Los precios de los servicios de MealFit varían según el plan que elijas. Ofrecemos diferentes opciones de planes semanales y mensuales. Puedes encontrar más información sobre nuestros precios en la sección de 'Planes y Precios' de nuestro sitio web.</p>

                <h2>¿Ofrecen opciones vegetarianas?</h2>
                <p id="f">Sí, en MealFit ofrecemos opciones vegetarianas para aquellos que siguen una dieta sin carne. Nuestro menú incluye una variedad de platos vegetarianos deliciosos y saludables para satisfacer tus necesidades dietéticas.</p>

                <h2>¿Cuáles son las opciones de entrega?</h2>
                <p id="f">Ofrecemos opciones de entrega flexibles para adaptarnos a tus necesidades. Puedes optar por la entrega a domicilio o recoger tus comidas en uno de nuestros puntos de recogida. Nuestro objetivo es hacer que la entrega sea conveniente y fácil para ti.</p>
            </div>

        </div>

            
    </body>
    <footer>

    </footer>
</html>