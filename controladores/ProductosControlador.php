<?php
require_once 'librerias/libreria.php';
class ProductosControlador{
    
    public function __construct(){}
    
    public function index(){
        require_once 'modelos/ProductosModelo.php';
        if(isset($_GET['id'])){
            
            $id_categoria=$_GET['id'];
            
            $producto=new ProductosModelo();
            $productos=$producto->getByCategoria($id_categoria);
            
        require_once 'vistas/indexProductosVista.php';
        
        }
    }
    
    
    
    public function nuevoProducto(){
        
        require_once 'vistas/administrador/nuevoProductoVista.php';
        
    }
    
    public function guardarProducto(){
        
        require_once("librerias/libreria.php");
        require_once("modelos/ImagenesModelo.php");
        require_once 'modelos/CategoriasProductosModelo.php';
        
        if (isset($_POST['nuevo_producto'])){
            
            $imagenes= subir_multiples_archivos();
           
                                $producto=new ProductosModelo();
				
				
				$producto->setNombreProducto($_POST['nombre_producto']);
                                $producto->setNombreOriginalProducto($_POST['nombre_original_producto']);
                                $categoria=new CategoriasProductosModelo($_POST['categoria']);
                                $producto->setCategoria($categoria);
				$producto->setAnioLanzamiento($_POST['anio_lanzamiento']);
				$producto->setSinopsis($_POST['sinopsis']);
				$producto->setReparto($_POST['reparto']);
				$producto->setDirector($_POST['director']);
                                
                                $producto->guardar($imagenes);
        }
        require_once 'vistas/administrador/nuevoProductoVista.php';
    }
    
    public function modificarProducto(){
        require_once("modelos/ImagenesModelo.php");
        require_once 'modelos/ProductosModelo.php';
        $producto=new ProductosModelo();
        $productos=$producto->getTodo();
        require_once 'vistas/administrador/modificarProductoVista.php';
    }
    
    public function actualizarProducto(){
        
        require_once 'modelos/CategoriasProductosModelo.php';
        require_once 'modelos/ImagenesModelo.php';
        
        if(isset($_POST['modificar_producto'])){
            
            if (isset($_GET['id'])){
            
        $id=$_GET['id'];
        $imagenes=[];
        foreach ($_POST['directorio_imagen'] as $key=>$value){
            
            $nombre_imagen=$_POST['nombre_imagen'][$key];
            $directorio_imagen=$_POST['directorio_imagen'][$key];
            $id_imagen=$_POST['id_imagen'][$key];
            
            $imagen=new ImagenesModelo($nombre_imagen,$directorio_imagen,"");
            $imagen->setIdImagen($id_imagen);
            $imagenes[]=$imagen;
        }
        
            $producto=new ProductosModelo();
				
				
            $producto->setNombreProducto($_POST['nombre_producto']);
            $producto->setNombreOriginalProducto($_POST['nombre_original_producto']);
            $categoria=new CategoriasProductosModelo($_POST['categoria']);
            $producto->setCategoria($categoria);
            $producto->setAnioLanzamiento($_POST['anio_lanzamiento']);
            $producto->setSinopsis($_POST['sinopsis']);
            $producto->setReparto($_POST['reparto']);
            $producto->setDirector($_POST['director']);
        
            $producto->setImagenes($imagenes);
            $producto->actualizar($id);
            
            $controller=new ProductosControlador();
            $controller->modificarProducto();
           // header("Location:?controller=Productos&action=modificarProducto");

            }
        }
        
    }
    
    public function eliminarProducto(){
        if (isset($_GET['id'])){
        
            $id=$_GET['id'];
       
        $producto=new ProductosModelo();
        $producto->eliminar($id);
        
        $controller=new ProductosControlador();
        $controller->modificarProducto();
        
        }
    }
    
                 public function buscarProductos(){
                    if ((isset($_POST['buscar']))){
                     $nombre=$_POST['nombre_producto'];
                     $categoria=$_POST['categoria_producto'];
                     $anio_lanzamiento=$_POST['anio_lanzamiento'];
                     
                    $producto=new ProductosModelo();
                    $productos=$producto->buscar($nombre,$categoria,$anio_lanzamiento); 
                    
                    require_once("vistas/administrador/modificarProductoVista.php");
                    }
    }
}

