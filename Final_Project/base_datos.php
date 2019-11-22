<?php
$conexion = mysqli_connect ("localhost", "root", "");

if($conexion == false) {
    echo "No puedo conectarme a la base de datos.";
    die();
} else {
    echo "Conexión exitosa";
}

mysqli_select_db($conexion, "proyecto")  or die ("No puedo conectarme");
?>