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
        
        <h2>Has llamado a modificarProductoVista</h2>
        <form action="?controller=Productos&action=buscarProductos" method="post">
            
            <label for="nombre_producto"><input type="text" id="nombre_producto" name="nombre_producto"/></label>
            <label for="categoria_producto">
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
             <?php
        $cont = date("Y");
            ?>
            <label for="anio_lanzamiento">
                <select name="anio_lanzamiento" id="anio_lanzamiento">
                    <option value="">--Año lanzamiento--</option>
                  <?php while ($cont >= 1950) { ?>
                    
         <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
            <?php $cont = ($cont-1); } ?>   
                </select>
                </label>
            <input type="submit" name="buscar" value="Buscar"/>
        </form>
        <?php foreach ($productos as $producto){ ?>
            
        <form action="<?php if(isset($_POST['modificar_producto'])){ echo '?controller=Productos&action=actualizarProducto&id='. $producto->getIdProducto();} ?>" method="post">
            
            <label for="nombre_producto">Título película:<input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo $producto->getNombreProducto(); ?>"/></label><br>
            <label for="nombre_original_producto">Titulo Original:<input type="text" id="nombre_original_producto" name="nombre_original_producto" value="<?php echo $producto->getNombreOriginalProducto(); ?>"/></label><br>
            <?php if($producto->getCategoria()->getIdCategoria()==1){ ?>
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            <?php } elseif ($producto->getCategoria()->getIdCategoria()==2) { ?>
            
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1">Acción</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected >Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            <?php } elseif ($producto->getCategoria()->getIdCategoria()==3) { ?>
            
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
           
            <?php }elseif ($producto->getCategoria()->getIdCategoria()==4) { ?>
            
                <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            <?php }elseif ($producto->getCategoria()->getIdCategoria()==5) { ?>
            
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            
            <?php }elseif ($producto->getCategoria()->getIdCategoria()==6) { ?>
            
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            
            <?php }elseif ($producto->getCategoria()->getIdCategoria()==7) { ?>
            
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            
            <?php }elseif ($producto->getCategoria()->getIdCategoria()==8) { ?>
            
                <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1" >Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="<?php echo $producto->getCategoria()->getIdCategoria(); ?>" selected>Musicales</option>
                   
                </select>
            </label><br>
            
                <?php } ?>
            <?php
        $cont = $producto->getAnioLanzamiento();
            ?>
            <label for="anio_lanzamiento">Año de lanzamiento:
                
                <select id="anio_lanzamiento" name="anio_lanzamiento">
        <?php while ($cont >= 1950) { ?>
         <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
            <?php $cont = ($cont-1); } ?>
</select></label><br>
            <label for="reparto">Reparto:<input type="text" id="reparto" name="reparto" value="<?php echo $producto->getReparto(); ?>"/></label><br>
            <label for="director">Director:<input type="text" id="director" name="director" value="<?php echo $producto->getDirector(); ?>"/></label><br>
            <label for="sinopsis">Sinopsis:<textarea name="sinopsis" id="sinopsis" cols="6" rows="10"><?php echo $producto->getSinopsis(); ?></textarea></label><br>
            <h3>Imagenes</h3>
            <?php foreach ($producto->getImagenes() as $imagen){ ?>
            <input type="hidden" value="<?php $imagen->getIdImagen(); ?>" name="id_imagen[]"/>
     <?php if ($imagen->getNombreImagen()=="Portada"){?>
            <input type="hidden" name="id_imagen[]" value="<?php echo $imagen->getIdImagen(); ?>"/>
            <label for="nombre_imagen">Nombre imagen:
                <select name="nombre_imagen[]" id="nombre_imagen">
                    <option value="">---Nombre imagen--</option>
                    <option value="<?php $imagen->getNombreImagen(); ?>" selected >Portada</option>
                    <option >Escena</option>
                   
                   
                </select>
            </label><br>
     <?php }elseif ($imagen->getNombreImagen()=="Escena") { ?>
                        
          <label for="nombre_imagen">Nombre imagen:
                <select name="nombre_imagen[]" id="nombre_imagen">
                    <option value="">---Nombre imagen--</option>
                    <option >Portada</option>
                    <option value="<?php $imagen->getNombreImagen(); ?>" selected >Escena</option>
                   
                   
                </select>
            </label><br>
            
            
                   <?php } ?>
             <label for="directorio_imagen">Director:<input type="text" id="directorio_imagen" name="directorio_imagen[]" value="<?php echo $imagen->getDirectorioImagen(); ?>"/></label><br>       
            <?php } ?>
            <input type="submit" name="modificar_producto" value="Guardar"/><br>
            <a href="?controller=Productos&action=eliminarProducto&id=<?php echo $producto->getIdProducto(); ?>">Eliminar producto</a>
        </form>
        
        <?php  } ?>
        
    </body>
</html>
