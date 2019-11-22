<?php
   $conexion = mysqli_connect("localhost", "root", "") or die ("No puedo conectarme a la base de datos");

   mysqli_select_db($conexion,"proyectof") or die ("Ninguna DB seleccionada");
?>