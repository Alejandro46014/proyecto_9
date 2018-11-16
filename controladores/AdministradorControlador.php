<?php

class AdministradorControlador{
    
    public function __construct() {
        
    }
    
    public function listarUsuarios(){
			
			require_once("modelos/AdministradorModelo.php");
			
			

			$usuarios=new UsuariosModelo();
			$usuarios=$usuarios->getTodo();
			
			require_once("vistas/administrador/gestionarUsuariosVista.php");
		}
                
                public function bloquearUsuario(){
                    
                    if(isset($_GET['id'])){
                    require_once 'modelos/UsuariosModelo.php'; 
            $id=$_GET['id'];
            $activo="No";
            $usuario=new UsuariosModelo();
            
            $usuario=$usuario->getById($id);
            $usuario->setActivoUsuario($activo);
             $usuarioAd=new AdministradorModelo();
             $usuarioAd->bloquearUsuario($usuario);       
                   /* require_once("modelos/AdministradorModelo.php");
                    
                    $usuarioAd=new AdministradorModelo();
                    $usuarioAd->bloquearUsuario($usuario);
                require_once("vistas/administrador/gestionarUsuariosVista.php");*/
                        $adminController=new AdministradorControlador();
                        $adminController->listarUsuarios();
                    }   
                }
                
                public function buscarUsuarios(){
                    if ((isset($_POST['buscar']))){
                     $id=$_POST['id_usuario'];
                     $tipo_usuario=$_POST['tipo_usuario'];
                     $activo=$_POST['activo_usuario'];
                     
                    $usuarioAd=new AdministradorModelo();
                    $usuarios=$usuarioAd->buscarUsuarios($id,$tipo_usuario,$activo); 
                    
                    require_once("vistas/administrador/gestionarUsuariosVista.php");
                    }
                }
                
                
                
                
                
                
}
        
