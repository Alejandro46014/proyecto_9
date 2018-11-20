<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
      
        <form method="post" action="?controller=Usuario&action=actualizarUsuario&id=<?php echo $usuario->getIdUsuario(); ?>">
            <!--<input type="hidden"name="id_usuario" value="<?php echo $usuario->getIdUsuario();  ?>"/>-->
            <label for="nombre"><input type="text" name="nombre_usuario" id="nombre" value="<?php echo $usuario->getNombreUsuario(); ?>"/></label>
            <label for="apellidos"><input type="text" name="apellidos_usuario" id="apellidos" value="<?php echo $usuario->getApellidosUsuario(); ?>"/></label>
            <label for="email"><input type="email" name="email_usuario" id="email" value="<?php echo $usuario->getEmailUsuario(); ?>"/></label>
            <label for="pais"><input type="text" name="pais_usuario" id="pais" value="<?php echo $usuario->getPaisUsuario(); ?>"/></label>
            <label for="fecha_nacimiento"><input type="date" name="fecha_nacimiento_usuario" id="fecha_nacimiento" value="<?php echo $usuario->getFechaNacimientoUsuario(); ?>"/></label>
            <label for="password"><input type="password" name="password_usuario" id="pais" value="<?php echo $usuario->getPasswordUsuario(); ?>"/></label>
            <label for="fecha_nacimiento"><input type="password" name="rpassword" id="rpassword" /></label>
            <input type="submit" name="actualizar" value="Actualizar"/>
        </form>
    </body>
</html>
