<?php
echo<<<HTML
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/ilogos.png" />
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
HTML;
include "header_nav.php";
echo<<<HTML
	<form action="homee.html" method="get" autocomplete="off">
		<p class="text-center text-muted text-uppercase">Iniciar sesión en la cuenta</p>
		<div>
		  <label>Correo</label>
		  <input id="UserEmail" type="email">
		</div>
		<div>
		  <label>Contraseña</label>
		  <input TYPE="password" id="UserPass">
		</div>
        <div>
            <a href="register.php">Registrarse</a>
        </div>
		<div class="form-group text-center">
            <input type="submit" value="Iniciar Sesión" class="btn btn-raised btn-danger">
		</div>
	</form>
</body>
</html>
HTML;
?>