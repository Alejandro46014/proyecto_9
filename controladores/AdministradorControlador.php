<?php

class AdministradorControlador{
    
    public function __construct() {
        
    }
    
    public function index(){
        
        require_once 'vistas/administrador/administradorVista.php';
    }

        public function listarUsuarios(){
			
			require_once("modelos/AdministradorModelo.php");
			
			

			$usuarios=new UsuariosModelo();
			$usuarios=$usuarios->getTodo();
			
			require_once("vistas/administrador/gestionarUsuariosVista.php");
		}
                
                public function bloquearUsuario(){
                    
                    if(isset($_GET['id'])){
                   
            $id=$_GET['id'];
            
           
             $usuarioAd=new AdministradorModelo();
             $usuarioAd->bloquearUsuario($id);       
                   
                        $adminController=new AdministradorControlador();
                        $adminController->listarUsuarios();
                    }   
                }
                
                 public function desbloquearUsuario(){
                    
                    if(isset($_GET['id'])){
                   
            $id=$_GET['id'];
            
           
             $usuarioAd=new AdministradorModelo();
             $usuarioAd->desbloquearUsuario($id);       
                   
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
        
