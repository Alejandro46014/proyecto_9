<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
	
	<form method="post" action="?controller=Usuarios&action=crearUsuario">
            
<label for="nombre">Nombre: </label><input type="text" id="nombre" name="nombre_usuario" value="<?php echo $_POST['nombre_usuario']; ?>"/>
	<label for="apellido1">Primer apellido: </label><input type="text" id="apellido1" name="apellido1_usuario" value="<?php echo $_POST['apellido1_usuario']; ?>"/>
	<label for="apellido2">Segundo apellido: </label><input type="text" id="apellido2" name="apellido2_usuario" value="<?php echo $_POST['apellido2_usuario']; ?>"/>
	<label for="email">Correo electrónico: </label><input type="email" id="email" name="email_usuario" value="<?php echo $_POST['email_usuario']; ?>"/>
	<label for="fecha_nacimiento">Fecha de nacimiento: </label><input type="date" min="1918-12-31" max="2000-12-31" id="fecha_nacimiento" name="fecha_nacimiento_usuario" value="<?php echo $_POST['fecha_nacimiento']; ?>"/>
	<label for="pais">Pais: </label><input type="text" id="pais" name="pais_usuario" value="<?php echo $_POST['pais_usuario']; ?>"/>
	<label for="password">Contraseña: </label><input type="password" id="password" name="password_usuario"/>
	<label for="rpassword">Repite contraseña: </label><input type="password" id="rpassword" name="rpassword"/>
	<input type="submit" value="Guardar" name="guardar"/>
</form>


<?php
require_once 'vistas/plantillas/footer.php';

?>