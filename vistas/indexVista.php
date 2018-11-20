<?php session_start();
$_SESSION['usuario'];
require_once("modelos/UsuariosModelo.php");  ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>LLamaste a la vista</h1>
        
        <p>Has creado un usuario</p>
	<?php
	
	/*$usuario=unserialize($_SESSION['usuario']);
	echo $usuario->getNombreUsuario();
	echo($usuario->getApellidosUsuario());
	echo $usuario->getTipoUsuario();
	echo $usuario->getFechaAltaUsuario();*/
	?>
</body>
</html>