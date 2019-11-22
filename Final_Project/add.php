<?php
  include "conexion.php";

  //$id = ($_GET['id']);
  $name = ($_GET['username']);
  $email = ($_GET['useremail']);
  $pass = ($_GET['userpassword']);
  $pass_r = ($_GET['userpassword_r']);
  
  $insert = "INSERT into users(name, email, password) values ('$name', '$email', '$pass')";
  echo $insert;

  mysqli_query($conexion,$insert);

//   header("Location:register.php");
?>