<?php
 
$emai = $_POST['vemail'];
$pass = $_POST['vpassword'];
 
if(empty($emai) || empty($pass)){
    header("Location: login.php");
    exit();
}
 
include "conexion.php";
$select = "SELECT * FROM users WHERE email = '".$emai."' ";
$result = mysqli_query($conexion,$select);
 
if($row = mysqli_fetch_array($result)){
    if($row['password'] == $pass){
        session_start();
        $_SESSION['email'] = $emai;
        header("Location: index.php");
    } else {
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
 
 
?>