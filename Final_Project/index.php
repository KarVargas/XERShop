<?php
include "conexion.php";

echo<<<HTML
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XER Shop</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script>
        function mostrar_datos(nombre) {
            if(nombre.length == 0) {
                document.getElementById("sugerencias").innerHTML="";
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("sugerencias").innerHTML = this.responseText;
                    }
                }
            }
            xmlhttp.open("GET", "nombres.php?nombre="+nombre, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
HTML;
include "header_nav.php";
echo<<<HTML
    Buscar: <input type="text" onkeyup="mostrar_datos(this.value)">
    <span id="sugerencias"></span>
    <div class="contenedor">
        <div class="hero">
            <!--<img src="img/hero.jpg" alt="Imagen Hero">-->
        </div>
        <main>
            <h2>Nuestros Productos</h2>
            <ul class="lista-productos">
                <li>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/61srWdFBtKL._SX679_.jpg" alt="Producto">
                </li>
                <li>
                    <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00750940180660l.jpg" alt="Producto">
                </li>
                <li>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/719wzsWKkfL._AC_SX569_.jpg" alt="Producto">
                </li>
                <li>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/417b2bIRSbL._AC_SX466_.jpg" alt="Producto">
                </li>
                <li>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81VnCDTf1WL._AC_SX679_.jpg" alt="Producto">
                </li>
                <li>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/91bL0%2BvwS0L._AC_SY450_.jpg" alt="Producto">
                    <!--<p>SASS <span class="precio">$25</span></p>
                    <a href="#" class="boton">Comprar</a>-->
                </li>
            </ul>
        </main>
    </div><!--.contenedor-->
</body>
</html>
HTML;
?>