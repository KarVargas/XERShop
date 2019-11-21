<?php
include "base_datos.php";

$nombre_usuario = ($_GET['nombre_usuario']);
$correo = ($_GET['correo']);
$contraseña = ($_GET['contraseña']);

$insert ="INSERT into usuario(nombre_usuario, correo, contraseña) values('$nombre_usuario','$correo', '$contraseña')";


echo $insert;
mysqli_query($conexion, $insert);

?>