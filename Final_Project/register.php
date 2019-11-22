<?php
echo<<<HTML
<html>
<head>
HTML;
include "head_web.php";
echo<<<HTML
	<title>Registro de XER</title>
	<script>
		function validar() {
			pass=document.getElementById("UserPass").value;
			conp=document.getElementById("ConfUserPass").value;
            if(pass != conp) {
                alert("No son las mismas contraseñas");
                return false;
            }
		}
	</script>
</head>
<body>
HTML;
include "header_nav.php";
echo<<<HTML
	<div class="centrar-form">
		<form action="add.php" method="get" target="_self" onsubmit="return validar();">
			<div class="box-inner">
				<p class="">Registrar una nueva cuenta</p>
				<div>
					<label>Nombre</label>
					<input type="text" name="username">
				</div>
				<div>
					<label>Correo</label>
					<input type="email" name="useremail">
				</div>
				<div>
					<label>Contraseña</label>
					<input type="password" name="userpassword">
				</div>
				<div>
					<label>Confirmar Contraseña</label>
					<input type="password" name="userpassword_r">
				</div>
				<div>
					<a href="login.php">Ya eres miembro?</a>
				</div>
				<div>
					<input type="submit" value="Registrarse" class="boton">
				</div>
			</div>
		</form>
	</div>
</body>
</html>
HTML;
?>