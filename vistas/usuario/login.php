<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
	
	<form action="?controller=Usuarios&action=loguearse" method="post" >
<label for="email">Correo electrónico: </label><input type="email" id="email" name="email_usuario" value="<?php echo $_POST['email_usuario']; ?>"/>
	<label for="password">Contraseña: </label><input type="password" id="password" name="password_usuario"/>
	<input type="submit" value="Login" name="login"/>
</form>
</body>
</html>