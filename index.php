<?php

session_start();

?>



<?php


require_once('modelos/ConectarModelo.php');


	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 

	//si la variable controller y action son pasadas por la url desde layout.php entran en el if

	if (isset($_GET['controller'])&&isset($_GET['action'])) {

		$controller=$_GET['controller'];

		$action=$_GET['action'];		

	} else {
            
            $_GET['id']=1;
            $controller=new ProductosControlador();
            $controller->index();
           // header("Location:?controller=Productos&action=index&id=1");

	}
        
        require_once 'vistas/plantillas/header.php';
        
        
      //session_start();
      //session_destroy();
      //se comprueba si existe alguna sesión o no, entonces se muestra menu de registro o menu del usuario
        if(session_status() == PHP_SESSION_ACTIVE){
            
          require_once 'vistas/plantillas/navegacion_invitados.php';
          
        }elseif(session_status() == PHP_SESSION_ACTIVE && $usuario->getTipoUsuario()->getTipoUsuario()=="Administrador"){
            
            require_once 'vistas/plantillas/navegacion_administrador.php';
            
        }else{
          require_once 'vistas/plantillas/navegacion_invitados.php';
        }
        
        
	
?>
<?php require_once 'vistas/plantillas/footer_administrador.php';?>
