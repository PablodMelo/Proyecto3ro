<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<title>REGISTRARSE</title>
	<link rel="stylesheet" href="css1/estilo.css">
	<link rel="stylesheet" href="css\all.min.css">
</head>
<body>
	<form  method="post">
		<p class="titulo">REGISTRARSE</p>
<p>
	
	<label for="">
		<i class="fas fa-address-card"></i><input type="number" placeholder="Cedula" name="cedula"><br>
	</label>

	<label for="">
		<i class="fas fa-envelope"></i><input type="email" placeholder="Email" name="email"><br>
	</label>

	<label for="">
		<i class="fas fa-key"></i><input type="password" id="contra" placeholder="Contraseña" name="contra">
	</label>

	</fieldset> 
</p>



<p>
	<label for="">
		<input type="Submit" value="Registrarse" name="enviar">
	</label>
	<label for=""><a href="http://localhost/practicos/proyecto/Login/login.php"><input type="button" name="login" value="Iniciar Sesion"></a></td></label>
</p>

	</form>
	<?php
	include("registrar.php");
	?>

</body>
</html>