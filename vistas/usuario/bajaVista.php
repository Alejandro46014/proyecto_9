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
        <h3>Seguro que quieres darte de baja</h3>
        <a href="?controller=Usuarios&action=darseBajaUsuario&id=<?php echo $usuario->getIdUsuario(); ?>">Aceptar</a>
        
        <?php
        echo $usuario->getNombreUsuario()." ";
        echo $usuario->getApellidosUsuario()." ";
        ?>
    </body>
</html>
