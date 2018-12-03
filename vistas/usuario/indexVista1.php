<?php session_start();
$_SESSION['usuario'];
require_once('modelos/UsuariosModelo.php'); 
  ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>LLamaste a la vista</h1>
	<table border='1'>

	<tr>

		<td>Id</td>

		<td>Nombre</td>

		<td>Apellidos</td>

		<td>Email</td>
                
                <td>Fecha nacimiento</td>
                
                <td>Pais</td>

		<td>Fecha alta</td>

		<td>Activo</td>
                
                <td>Contraseña</td>

		<td>Tipo de usuario</td>

		

		<td colspan=2 >Acciones</td>

	</tr>

<?php

	//foreach ($usuarios as $usuario) { ?>

		

			<tr>

				<td><?php echo $usuario->getIdUsuario(); ?></td>

				<td><?php echo $usuario->getNombreUsuario(); ?></td>

				<td><?php echo $usuario->getApellidosUsuario();?></td>

				<td><?php echo $usuario->getEmailUsuario();?></td>
                                
                                <td><?php echo $usuario->getFechaNacimientoUsuario(); ?></td>

				<td><?php echo $usuario->getPaisUsuario(); ?></td>

				<td><?php echo $usuario->getFechaAltaUsuario();?></td>

				<td><?php echo $usuario->getActivoUsuario();?></td>
                                
                                <td><?php echo $usuario->getPasswordUsuario();?></td>

				<td><?php echo $usuario->getTipoUsuario()->getTipoUsuario();?></td>

				<td><a href="Controllers/usuario_controller.php?action=update&id=<?php echo $usuario->getIdUsuario(); ?>">Actualizar</a> </td>

				<td><a href="Controllers/usuario_controller.php?action=delete&id=<?php echo $usuario->getIdUsuario(); ?>">Eliminar</a> </td>

			</tr>		

	<?php// } ?>

</table>
	
	
</body>
</html>