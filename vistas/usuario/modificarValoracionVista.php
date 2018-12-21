 <div class="formulario_small clearfix">
        <h3>Introduce tu valoración</h3> 
        <form method="post" action="?controller=Valoraciones&action=actualizarValoracion&id=<?php  echo $valoracion->getIdValoracion();?>">
           <div class="col_formulario">
          
               <label for="valor_votacion">Valor Votación<input type="number" min="0" max="5" name="valor_votacion" id="valor_votacion" value="<?php  echo $valoracion->getValorVotacion(); ?>"/></label>
           </div>
           <div class="col_formulario">
           <label for="comentario">Comentario:<textarea name="comentario" cols="9" rows="9"><?php echo $valoracion->getComentario(); ?></textarea></label>
           </div>
           <div class=col_formulario>
           <input class="buttom_green" type="submit" name="valorar" value="Modificar valoración">
           </div>
        </form>
        
       </div>