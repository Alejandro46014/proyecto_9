
         <?php
       
       $usuario=new UsuariosModelo();
       $usuario->setIdUsuario(4);
        ?>
        <h2>Llamaste a nuevaValoracionVista</h2>
       <div class="formulario clearfix">
        <form method="post" action="?controller=Valoraciones&action=guardarValoracion&id=<?php echo $producto->getIdProducto(); ?>">
            
            <input type="hidden" value="<?php echo $usuario->getIdUsuario(); ?>" name="id_usuario"/>
            <div class="col_formulario">
            <label for="valor_votacion">Valor Votación<input type="number" min="0" max="5" name="valor_votacion" id="valor_votacion"/></label>
            </div>
            <div class="col_formulario">
            <label for="comentario">Comentario:<textarea name="comentario" cols="9" rows="9"><?php echo $producto->getIdProducto(); ?></textarea></label>
            </div>
            <div class="col_formulario">
            <input type="submit" name="valorar" value="Nueva valoración">
            </div>
        </form>
       </div>
       
   