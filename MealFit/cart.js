<script>
function addToCart(productName, protein, carbs) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText); // Mostrar mensaje de respuesta
            } else {
                alert('Error al agregar el producto al carrito: ' + xhr.responseText);
            }
        }
    };
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('productName=' + encodeURIComponent(productName) + '&protein=' + encodeURIComponent(protein) + '&carbs=' + encodeURIComponent(carbs));
}
</script>
