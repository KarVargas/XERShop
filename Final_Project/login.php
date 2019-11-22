<?php
echo<<<HTML
<html>
<head>
HTML;
include "head_web.php";
echo<<<HTML
	<title>LogIn</title>
</head>
<body>
HTML;
include "header_nav.php";
echo<<<HTML
	<form action="validar.php" method="post">
		<p class="text-center text-muted text-uppercase">Iniciar sesión en la cuenta</p>
		<div>
		  <label>Correo</label>
		  <input type="email" name="vemail">
		</div>
		<div>
		  <label>Contraseña</label>
		  <input type="password" name="vpassword">
		</div>
        <div>
            <a href="register.php">Registrarse</a>
        </div>
		<div class="form-group text-center">
            <input type="submit" value="Iniciar Sesión" class="boton">
		</div>
	</form>
</body>
</html>
HTML;
?>