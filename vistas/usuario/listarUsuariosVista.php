<?php
require_once("modelos/UsuariosModelo.php")
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	foreach($usuarios as $usuario){
		
		echo($usuario->getIdUsuario());
		echo($usuario->getNombreUsuario());
	}
	?>
</body>
</html>