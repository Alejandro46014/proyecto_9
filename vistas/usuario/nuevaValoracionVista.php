
         <?php
          session_start();
          $id=$_SESSION['usuario'];
          $usuario=new UsuariosModelo();
          $usuario=$usuario->getById($id);
        ?>
        <div id="box">
        <div class="item_producto">
       <?php foreach ($producto->getImagenes() as $imagen){
       if($imagen->getNombreImagen() == "Portada"){?>
            
        <img src="<?php echo $imagen->getDirectorioImagen();  ?>" Alt="Portada"/>
        <?php }}?>
        
        
        
        
        <div class="item_title">
        
                <span><?php echo $producto->getNombreProducto();  ?></span>
                
        </div>
        </div>
        <div class="formulario_small clearfix">
                <div class="cabecera_formularios">
                <h3>Introduce tu valoración</h3> 
                <form method="post" action="?controller=Valoraciones&action=guardarValoracion&id=<?php  echo $producto->getIdProducto(); ?>">
                </div> 
            <div class="col_formulario">
           <input type="hidden" name="id_usuario" value="<?php echo $usuario->getIdUsuario();  ?>"/>
           </div>
                   
        <div class="estrellas_valoracion">
                   
       <input id="radio1" type="radio" name="valor_votacion" value="5"><!--
    --><input id="radio1" type="radio" name="valor_votacion" value="5"/><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="valor_votacion" value="4"><!--
    --><input id="radio2" type="radio" name="valor_votacion" value="4"/><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="valor_votacion" value="3"><!--
    --><input id="radio3" type="radio" name="valor_votacion" value="3"/><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="valor_votacion" value="2"><!--
    --><input id="radio4" type="radio" name="valor_votacion" value="2"/><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="valor_votacion" value="1"><!--
    --><input id="radio5" type="radio" name="valor_votacion" value="1"/><!--
    --><label for="radio5">★</label>
                   
                   </div>
           
           <div class="col_formulario">
           <label for="comentario">Comentario:<textarea name="comentario" cols="9" rows="9"></textarea></label>
           </div>
           <div class=col_formulario>
           <input class="buttom_green" type="submit" name="valorar" value="Valora!!">
           </div>
        </form>
        
       </div>
       </div>
       
       
   