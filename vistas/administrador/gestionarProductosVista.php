<section class="seccion">
	
    <div class="formulario clearfix">
	<form action="?controller=Productos&action=buscarProductos" method="post">
            <div class="col_3_formulario">
            <label for="nombre_producto">Nombre producto<input type="text" id="nombre_producto" name="nombre_producto"/></label>
            </div>
            <div class="col_3_formulario">
            <label for="categoria_producto">Categoria producto
                <select name="categoria_producto" id="categoria_producto">
                    <option value="">--Catregoria--</option>
                    <option value="1">Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                     <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                </select>
            </label>
            </div>
             <?php
        $cont = date("Y");
            ?>
            <div class="col_3_formulario">
            <label for="anio_lanzamiento">Año lanzamiento
                <select name="anio_lanzamiento" id="anio_lanzamiento">
                    <option value="">--Año lanzamiento--</option>
                  <?php while ($cont >= 1950) { ?>
                    
         <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
            <?php $cont = ($cont-1); } ?>   
                </select>
                </label>
            </div>
            <div class="col_formulario">
                <input type="submit" name="buscar" value="Buscar" class="buttom_green"/>
            </div>
        </form>
    </div>
    <div class="row">
        
    </div>
    
    <div class="lista_usuarios">
	<div class="tabla">
		
		<table class="tabla">
	
	<tr>
		<th>Id</th>
		<th>Título</th>
		<th>Título original</th>
		<th>Año de lanzamiento</th>
		<th>Director</th>
		<th>Reparto</th>
		<th>Sinopsis</th>
		<th>Genero</th>
		<th>Imágenes</th>
		
		<th colspan=2 >Acciones</th>
	</tr>
<?php foreach ($productos as $producto) { ?>
		
			<tr>
				<td><?php echo $producto->getIdProducto(); ?></td>
				<td><?php echo $producto->getNombreProducto(); ?></td>
				<td><?php echo $producto->getNombreOriginalProducto(); ?></td>
				<td><?php echo $producto->getAnioLanzamiento();?></td>
				<td><?php echo $producto->getDirector();?></td>
				<td><?php echo $producto->getReparto();?></td>
				<td><?php echo $producto->getSinopsis();?></td>
				<td><?php echo $producto->getCategoria()->getGenero();?></td>
                                <?php if (count($producto->getImagenes())==3){ ?>
                                
                                <td class="green"><i class="fas fa-thumbs-up"></i></td>
                                
                                <?php }else{ ?>
                                
                                <td class="red">Faltan imágenes</td>
                                
                                <?php } ?>
                                
				<td><a href="?controller=Productos&action=modificarProducto&id=<?php echo $producto->getIdProducto(); ?>">Modificar</a> </td>	
                                
                                <td><a href="?controller=Productos&action=eliminarProducto&id=<?php echo $producto->getIdProducto(); ?>">Eliminar</a> </td>
                                
                                
			</tr>
			
	<?php } ?>
</table>
		</div>
	</div>

</section>