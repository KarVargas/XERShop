<?php
echo<<<HTML
<html>
<head>
	<title>Registro de XER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
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
		<form action="agregar.php" method="get" target="_self" onsubmit="return validar();" autocomplete="off">
			<div class="box-inner">
				<p class="">Registrar una nueva cuenta</p>
				<div>
					<label>Nombre</label>
					<input id="UserName" name="nombre_usuario" type="text" required>
				</div>
				<div>
					<label>Correo</label>
					<input id="UserEmail" name="correo" type="email" required>
				</div>
				<div>
					<label>Contraseña</label>
					<input TYPE="password" name="contraseña" id="UserPass" required>
				</div>
				<div>
					<label>Confirmar Contraseña</label>
					<input TYPE="password" id="ConfUserPass" required>
				</div>
				<div>
					<a href="login.html">Ya eres miembro?</a>
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