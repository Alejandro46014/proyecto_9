<?php 

class ValoracionesControlador{
    
    public function __construct() {
        
    }
    
    public function nuevaValoracion(){
        if (isset($_GET['id'])){
            $id_producto=$_GET['id'];
            
            $producto=new ProductosModelo();
            $producto=$producto->getById($id_producto);
           
        require_once 'vistas/usuario/nuevaValoracionVista.php';
        }
    }
    public function guardarValoracion(){
        require_once 'controladores/ProductosControlador.php';
        if (isset($_GET['id'])){
            if (isset($_POST['valorar'])){
       $id_producto=$_GET['id'];
        
       $id_usuario=$_POST['id_usuario'];
       $usuario=new UsuariosModelo();
       $usuario=$usuario->getById($id_usuario);
       $producto=new ProductosModelo();
       $producto=$producto->getById($id_producto);
       $valoracion=new valoracionesModelo();
       $valoracion->setValorVotacion($_POST['valor_votacion']);
       $valoracion->setComentario($_POST['comentario']);
       //$valoracion->setIdProducto($producto->getIdProducto());
       $fecha_valoracion=new DateTime();
       $valoracion->setFechaValoracion($fecha_valoracion);
       
       
      $valorado= $valoracion->valorar($usuario,$producto,$valoracion);
        }
        }
        session_start();
        //$valorado= serialize($valorado);
        $_SESSION['valorado']=serialize($valorado);
        $_SESSION['producto']=serialize($producto);
        $_SESSION['usuario']=serialize($usuario);
        header("Location:?controller=Productos&action=index");
        
     
    }

        public function modificarValoracion(){
        
            echo 'Vaaaaaaaaaaa';
    }
    
    public function bloquearValoración(){
        
        
    }
    
    public function buscarValoraciones(){
        
        
    }
       
}

if ($_GET['controller']== "Valoraciones"){
    require_once 'modelos/ValoracionesModelo.php';
    $controller=new ValoracionesControlador();
    
}
/*if ($_GET['action']=="guardarValoracion"){
    
    if (isset($_POST['valorar'])){
        $controller->guardarValoracion();
    }
}*/
