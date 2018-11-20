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
        <form action="?controller=Productos&action=guardarProducto" method="post">
            
            <label for="nombre_producto">Título película:<input type="text" id="nombre_producto" name="nombre_producto"/></label><br>
            <label for="nombre_original_producto">Titulo Original:<input type="text" id="nombre_original_producto" name="nombre_original_producto"/></label><br>
            <label for="categoria">Categoria:
                <select name="categoria" id="categoria">
                    <option value="">---Categoria--</option>
                    <option value="1">Acción</option>
                    <option value="2">Terror</option>
                    <option value="3">Románticas</option>
                    <option value="4">Infantiles</option>
                    <option value="5">Comedia</option>
                    <option value="6">Ciencia-ficción</option>
                    <option value="7">Drama</option>
                    <option value="8">Musicales</option>
                   
                </select>
            </label><br>
            <?php
        $cont = date('Y');
            ?>
            <label for="anio_lanzamiento">Año de lanzamiento:
                
                <select id="anio_lanzamiento" name="anio_lanzamiento">
        <?php while ($cont >= 1950) { ?>
         <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
            <?php $cont = ($cont-1); } ?>
</select></label><br>
            <label for="reparto">Reparto:<input type="text" id="reparto" name="reparto"/></label><br>
            <label for="director">Director:<input type="text" id="director" name="director"/></label><br>
            <label for="sinopsis">Sinopsis:<textarea name="sinopsis" id="sinopsis" cols="6" rows="10"></textarea></label><br>
            <input type="submit" name="nuevo_producto" value="Guardar"/>
        </form>
        
    </body>
</html>
