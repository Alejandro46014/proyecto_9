	<!--contenido principal-->
	
<section class="seccion">
	<div class="formulario clearfix">
		<form action="?controller=Valoraciones&action=buscarValoraciones" method="post">
		<div class="col_3_formulario">
			<label for="id_usuario">Id usuario:<br> <input type="number" id="id_usuario" name="id_usuario"/></label>
		</div>
		<div class="col_3_formulario">
			<label for="estado_valoracion">Estado valoración:<br>
                <select name="estado_valoracion">
                    <option value="">--Estado valoracion--</option>
                    <option value="Si">Bloqueada</option>
                    <option value="No">Activa</option>
                    
                    
                </select>
            </label>
		</div>
		<div class="col_3_formulario">
			<label for="id_producto">Id Producto:<br><input type="number" id="id_producto" name="id_producto"/></label>
		</div>
			<div class="col_formulario">
				<input type="submit" name="buscar" value="Buscar" class="buttom_green"/>
			</div>
		</form>
	</div>
	<div class="lista_usuarios">
	<div class="tabla">
		
		<table class="tabla">
	
	<tr>
		<th>Id valoración</th>
                <th>Id usuario</th>
                <th>Id producto</th>
		<th>Comentario</th>
		<th>Valor votación</th>
		<th>Numero votaciones</th>
                <th>Bloqueada</th>
		
		
		<th colspan=2 >Acciones</th>
	</tr>
<?php foreach ($valoraciones as $valoracion) { ?>
		
			<tr>
                                <td><?php echo $valoracion->getIdvaloracion(); ?></td>
				<td><?php echo $valoracion->getIdUsuario(); ?></td>
				<td><?php echo $valoracion->getIdProducto(); ?></td>
				<td><?php echo $valoracion->getComentario();?></td>
				<td><?php echo $valoracion->getValorVotacion();?></td>
                                <td><?php echo $valoracion->getNumeroVotaciones();?></td>
                                <td><?php echo $valoracion->getBloqueada();?></td>
			<?php if($valoracion->getBloqueada()=="No") { ?>
                                
				<td><a href="?controller=Valoraciones&action=bloquearValoracion&id=<?php echo $valoracion->getIdValoracion();  ?>">Bloquear</a> </td>
                       
                        <?php }elseif($valoracion->getBloqueada()=="Si"){  ?>
                                
                                <td><a href="?controller=Valoraciones&action=desbloquearValoracion&id=<?php echo $valoracion->getIdValoracion();  ?>">Desloquear</a> </td>
                        <?php }  ?>
                        
                        </tr>
			
	<?php } ?>
</table>
		</div>
	</div>
	
	</section>
	