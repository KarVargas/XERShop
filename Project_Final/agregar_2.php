<?php
include "base_datos.php";

$calle = ($_GET['calle']);
$num = ($_GET['num']);
$colonia = ($_GET['colonia']);
$estado = ($_GET['estado']);

$insert = "INSERT into direcciones(calle, num, colonia, estado)values('$calle','$num','$colonia','$estado')";


echo $insert;
mysqli_query($conexion, $insert);

?>