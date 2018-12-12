
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
        <div class="foto_miniatura clearfix">
        <?php foreach ($producto->getImagenes() as $imagen){
          if($imagen->getNombreImagen() == "Escena"){?>
        
        <div class="foto">
          <img src="<?php echo $imagen->getDirectorioImagen();  ?>" alt="Escena"/>
          
          </div><!--div .foto-->
          <?php } } ?>
        </div>
        
        
        <div class="item_title">
        
                <span><?php echo $producto->getNombreProducto();  ?></span>
                
        </div>
        </div>
        <div class="formulario_small clearfix">
        <h2>Introduce tu valoración</h2> 
        <form method="post" action="?controller=Valoraciones&action=guardarValoracion&id=<?php  echo $producto->getIdProducto();?>">
           <div class="col_formulario">
           <input type="hidden" name="id_usuario" value="<?php echo $usuario->getIdUsuario();  ?>"/>
           <label for="valor_votacion">Valor Votación<input type="number" min="0" max="5" name="valor_votacion" id="valor_votacion"/></label>
           </div>
           <div class="col_formulario">
           <label for="comentario">Comentario:<textarea name="comentario" cols="9" rows="9"></textarea></label>
           </div>
           <div class=col_formulario>
           <input class="buttom_green" type="submit" name="valorar" value="Nueva valoración">
           </div>
        </form>
        
       </div>
       
       
   