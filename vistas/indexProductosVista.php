

<!DOCTYPE html>
<?php require_once 'modelos/ValoracionesModelo.php';
require_once 'modelos/ProductosModelo.php';
require_once 'modelos/UsuariosModelo.php';
session_start();
$valorado=unserialize($_SESSION['valorado']);
$usuario= unserialize($_SESSION['usuario']);
//$producto= unserialize($_SESSION['producto']);
        ?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php require_once 'librerias/libreria.php'; ?>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Has llamado a indexProductosVista</h2>
        <?php
        foreach ($productos as $producto){
            
                    if ($producto->getIdProducto() != 0){
                        
                        echo 'Id producto: '.$producto->getIdProducto().'<br>';
                        if (is_a($valorado, "Valoraciones")){
                    if ($producto->getIdProducto() == $valorado->getIdProducto()){
            
                        enlaceModificarValoracion($valorado->getIdValoracion());
                        }
                        }
                        foreach ($producto->getImagenes() as $imagen){
                            echo 'Nombre imagen: '.$imagen->getNombreImagen().' ';
                             echo 'Id imagen: '.$imagen->getIdImagen().' ';
                              echo 'Directorio imagen: '.$imagen->getdirectorioImagen().' ';
                               echo 'Id producto_imagen: '.$imagen->getIdProducto().'<br>';
                              
                        }
                        
                        foreach ($producto->getValoraciones() as $valoracion){
                            
                            echo 'Id valoracion: '. $valoracion->getIdValoracion().' ';
                            echo 'Id producto_valoracion: '. $valoracion->getIdProducto().' ';
                            echo 'Id usuario_valoracion: '. $valoracion->getIdUsuario().'<br>';
                           
                        }
                    }
                }
        
        
        
        
        
        ?>
    </body>
</html>
