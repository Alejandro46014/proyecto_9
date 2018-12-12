<?php 

class ValoracionesControlador{
    
    public function __construct() {
        
    }
    
    public function nuevaValoracion(){
        if (isset($_GET['id'])){
            $id_producto=$_GET['id'];
            $id_usuario=$_GET['id_usuario']
;            
            require_once("modelos/ProductosModelo.php");
            require_once("modelos/UsuariosModelo.php");
            
            $usuario=new UsuariosModelo();
            $usuario=$usuario->getById("id_usuario");
            
            $producto=new ProductosModelo();
            $producto=$producto->getById($id_producto);
           
        require_once 'vistas/usuario/nuevaValoracionVista.php';
        }
    }
    public function guardarValoracion(){
    
    require_once("controladores/ProductosControlador.php");
     require_once("modelos/ProductosModelo.php");
      require_once("modelos/UsuariosModelo.php");
        
        if (isset($_GET['id'])){
            if (isset($_POST['valorar'])){
            
          $id_producto=$_GET['id'];
        
       $id_usuario=$_POST['id_usuario'];
       $usuario=new UsuariosModelo();
       $usuario=$usuario->getById($id_usuario);
       
       echo $usuario->getNombreUsuario();
       
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
        
        if(isset($valorado)){
       session_start();
        
        $_SESSION['valorado']=serialize($valorado);
        
        
        $_GET['id']=$producto->getCategoria()->getIdCategoria();
        $controller=new ProductosControlador();
        $controller->index();
        
     }
    }
    public function listarValoraciones(){
        
            require_once("modelos/ValoracionesModelo.php");
			

			$valoracion=new valoracionesModelo();
			$valoraciones=$valoracion->getTodo();
			
			require_once("vistas/administrador/gestionarValoracionesVista.php");
		}
                
                public function buscarValoraciones(){
                    if ((isset($_POST['buscar']))){
                     $id_usuario=$_POST['id_usuario'];
                     $id_producto=$_POST['id_producto'];
                     $bloqueada=$_POST['estado_valoracion'];
                     
                    $valoracion=new valoracionesModelo();
                   $valoraciones=$valoracion->buscarValoraciones($id_usuario, $id_producto, $bloqueada); 
                    
                    require_once("vistas/administrador/gestionarValoracionesVista.php");
                    }
                }
    

        public function modificarValoracion(){
        
            
    }
    
    public function bloquearValoracion(){
       
       if(isset($_GET['id'])){
           
            $id=$_GET['id'];
            
            $valoracion=new valoracionesModelo();
            
            if ($valoracion->bloquear($id)){
               
                echo('<script type="text/javascript">
				alert("La valoración fué bloqueada ");
				</script>');
                
                  $controller=new ValoracionesControlador();
                 $controller->listarValoraciones();
                 
			}else{
				echo('<script type="text/javascript">
				alert("No se pudo bloquear la valoración ");
				</script>');
			}
            }
        
    }
    
     public function desbloquearValoracion(){
       
       if(isset($_GET['id'])){
           
            $id=$_GET['id'];
            
            $valoracion=new valoracionesModelo();
            
            if ($valoracion->desbloquear($id)){
               
                echo('<script type="text/javascript">
		alert("La valoración fué desbloqueada ");
				</script>');
                
                 $controller=new ValoracionesControlador();
                 $controller->listarValoraciones();
                 
			}else{
		echo('<script type="text/javascript">
		alert("No se pudo desbloquear la valoración ");
		</script>');
			}
            }
        
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
