<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
	}

?>	

	<h1>Bienvenidos usuarios</h1>
	<?php
	echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
	?>

	<p><a href="cierre.php">Cerrar Seccion</a></p>
	
</body>
</html>
