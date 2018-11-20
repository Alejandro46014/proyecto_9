<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php require_once 'modelos/UsuariosModelo.php';  ?>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="?controller=Administrador&action=buscarUsuarios" method="post">
            
            <label for="id_usuario"><input type="number" id="id_usuario" name="id_usuario"/></label>
            <label for="tipo_usuario">
                <select name="tipo_usuario">
                    <option value="">--Tipo usuario--</option>
                    <option value="2">Usuario novel</option>
                    <option value="3">Usuario experto</option>
                    <option value="4">Usuario profesional</option>
                    
                </select>
            </label>
            <label for="activo_usuario"><input type="checkbox" id="activo_usuario" name="activo_usuario" value="Si"/>Activo<br><input type="checkbox" id="activo_usuario" name="activo_usuario" value="No"/>Activo</label>
            <input type="submit" name="buscar" value="Buscar"/>
        </form>
       <table border='1'>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Pais</td>
		<td>Email</td>
		<td colspan=2 >Acciones</td>
	</tr>
<?php
	foreach ($usuarios as $usuario) { ?>
		
			<tr>
				<td><?php echo $usuario->getIdUsuario(); ?></td>
				<td><?php echo $usuario->getNombreUsuario(); ?></td>
				<td><?php echo $usuario->getPaisUsuario();?></td>
				<td><?php echo $usuario->getEmailUsuario();?></td>
				<!--<td><a href="Controllers/usuario_controller.php?action=update&id=<?php echo $usuario->getIdUsuario(); ?>">Actualizar</a> </td>-->
				<td><a href="?controller=Administrador&action=bloquearUsuario&id=<?php echo $usuario->getIdUsuario(); ?>">Bloquear</a> </td>
			</tr>		
	<?php } ?>
</table>
    </body>
</html>
