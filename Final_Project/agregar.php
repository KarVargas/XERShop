<?php
$conexion = mysqli_connect ("localhost", "root", "", "proyecto");

if($conexion == false) {
    echo "No puedo conectarme a la base de datos.";
    die();
} else {
    echo "Conexión exitosa";
}

$co = "";
$no_us = "";
$con = "";
$con_r = "";
//$msg = "";

//if(isset($_GET['correo']) && ($_GET['nombre_usuario']) && ($_GET['contraseña']) && ($_GET['contraseña_r'])) {
    $co = strip_tags($_GET['email']);
    $no_us = strip_tags($_GET['nombre']);
    $con = strip_tags($_GET['contra']);
    $con_r = strip_tags($_GET['contra_r']);

    //if($contraseña == $contraseña_r) {
        $result = $conexion->query("SELECT * FROM `usuario`");
        //$usuario = $result->fetch_all(MYSQLI_ASSOC);
        // $row = mysqli_fetch_array($result,MYSQLI_NUM);
        // echo $row[0];
        $conexion->query("INSERT INTO `usuario` (`nombre_usuario`,`correo`,`contraseña`) VALUES ('".$no_us."', '".$co."', '".$con."');");
        
        echo mysqli_num_rows($result);
        //$count = count($usuario);

        /*if ($count == 0) {*/
            
        echo "IF";
        //}
    //}
//}
echo $co;
echo $no_us;
echo $con;
echo $con_r;
echo "NO IF";
//echo $count;
/*$nombre_usuario = ($_GET['nombre_usuario']);
$correo = ($_GET['correo']);
$contraseña = ($_GET['contraseña']);
$insert ="INSERT into usuario(nombre_usuario, correo, contraseña) values('$nombre_usuario','$correo', '$contraseña')";
echo $insert;
mysqli_query($conexion, $insert);*/
?>