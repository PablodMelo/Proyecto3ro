<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.org/TR/xhtml-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
<link rel="stylesheet" href="css1/estiloLogin.css">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Login</title>
</head>
<body>
	<form action="comprueba_login.php" method="post">
		<p>INICIAR SESION</p>
			<table>
					<tr><td class="izq"></td><td class="der"><i class="fas fa-user-alt"></i> <input type="text" name="login" placeholder="Email"></td></tr>
					<tr><td class="izq"></td><td class="der"><i class="fas fa-key"></i><input type="password" name="contra" placeholder="Contraseña"></td></tr>
					<tr><td colspan="2"><input type="submit" name="enviar" value="Iniciar sesion"></td>
					<tr><td colspan="2"><a href="http://localhost/practicos/proyecto/Login/index.php"><input type="button" name="registrarse" value="Registrarse"></a></td>
				</tr>
			</table>
	</form>
	


	<script src="https://kit.fontawesome.com/3bd5e1fa86.js" crossorigin="anonymous"></script>
</body>
</html>
