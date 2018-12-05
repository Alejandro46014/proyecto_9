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
         <?php
       
       $usuario=new UsuariosModelo();
       $usuario->setIdUsuario(4);
        ?>
        <h2>Llamaste a nuevaValoracionVista</h2>
       
        <form method="post" action="?controller=Valoraciones&action=guardarValoracion&id=<?php echo $producto->getIdProducto(); ?>">
            <input type="hidden" value="<?php echo $usuario->getIdUsuario(); ?>" name="id_usuario"/>
            <label for="valor_votacion">Valor Votación<input type="number" min="0" max="5" name="valor_votacion" id="valor_votacion"/></label>
            <label for="comentario">Comentario:<textarea name="comentario" cols="9" rows="9"><?php echo $producto->getIdProducto(); ?></textarea></label>
            <input type="submit" name="valorar" value="Nueva valoración">
        </form>
       
       
    </body>
</html>