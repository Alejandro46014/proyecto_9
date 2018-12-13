<?php
 
class UsuariosControlador

	{	

		public function __construct(){}



		
		public function listarUsuarios(){
			
			require_once("modelos/UsuariosModelo.php");
			

			$usuarios=new UsuariosModelo();
			$usuarios=$usuarios->getTodo();
			
			require_once("vistas/usuario/listarUsuariosVista.php");
		}
		
		public function listarUsuarioId(){
			$id=$_POST['id'];
			$usuario=new UsuariosModelo();
			
			$usuario->setId($id);
			
			$usuario=$usuario->getById();
			
			require_once("vistas/usuario/listarUsuarioVista.php");
		}



		public function registrar(){

			require_once('vistas/usuario/registrarVista.php');

		}



		//guardar

		public function crearUsuario(){
                    require_once 'modelos/UsuariosModelo.php';
                    $apellidos=$_POST['apellido1_usuario']." ".$_POST['apellido2_usuario'];
                
		$usuario=new UsuariosModelo();
                $usuario->setNombreUsuario($_POST['nombre_usuario']);
                $usuario->setApellidosUsuario($apellidos);
                $usuario->setEmailUsuario($_POST['email_usuario']);
                $usuario->setFechaNacimientoUsuario($_POST['fecha_nacimiento_usuario']);
                $usuario->setActivoUsuario("Si");
                $tipo_usuario=new TipoUsuarios(2);
                $usuario->setTipoUsuario($tipo_usuario);
                $usuario->setPaisUsuario($_POST['pais_usuario']);
                $usuario->setPasswordUsuario($_POST['password_usuario']);
                $usuario->setFechaAltaUsuario(date("Y-m-d"));
                
                
                $usuario=$usuario->guardar();
              if(isset($usuario)){     
                require_once 'vistas/usuario/loginVista.php';
              }else{
                  require_once 'vistas/usuario/registrarVista.php';
              }

		}



        public function actualizarUsuario(){
   
            if(isset($_GET['id'])){
                              
                  $id=$_GET['id'];
                  
                  $usuario=new UsuariosModelo();
                  
               $apellidos=$_POST['apellido1_usuario'] ." ".$_POST['apellido2_usuario'];
              
              $usuario->setNombreUsuario($_POST['nombre_usuario']);
              $usuario->setApellidosUsuario($apellidos);
              $usuario->setEmailUsuario($_POST['email_usuario']);
              $usuario->setFechaNacimientoUsuario($_POST['fecha_nacimiento_usuario']);
              
              $usuario->setPaisUsuario($_POST['pais_usuario']);
              $usuario->setPasswordUsuario($_POST['password_usuario']);
              
              
              
             $usuario->actualizar($id);
              
              $controller=new UsuariosControlador();
              $controller->modificarUsuario();
                          }
              
          }
      
      
      
            


		public function modificarUsuario(){
                       
                    $id=$_GET['id'];
                        
			

			require_once('modelos/UsuariosModelo.php');

			$usuario=new UsuariosModelo();
                        
			$usuario=$usuario->getById($id);
                        
			require_once('vistas/usuario/modificarUsuarioVista.php');

		}
                
                public function  login(){
                    
                    require_once 'vistas/usuario/loginVista.php';
                }
                
                public function loguearse(){
                    require_once 'controladores/ProductosControlador.php';
                    require_once 'modelos/ProductosModelo.php';
                    $usuarioAccion=new UsuariosModelo();
                    $usuarioAccion->setEmailUsuario($_POST['email_usuario']);
                    $usuarioAccion->setPasswordUsuario($_POST['password_usuario']);
                    $usuario=$usuarioAccion->login();
                   if(isset($usuario)){ 
                       
                    session_start();
                $_SESSION['login']=TRUE;   
		$_SESSION['usuario']= $usuario->getIdUsuario();
               
                  
                    $_GET['id']=1;
                    $controller=new ProductosControlador();
                    $controller->index();
                    
                   }
                }
                
                public function bajaVista(){
                    $usuario=new UsuariosModelo();
                    $usuario=$usuario->getById($_GET['id']);
                    require_once 'vistas/usuario/bajaVista.php';
                }

                public function darseBajaUsuario(){
                   $id=$_GET['id'];
                                $activo='No';
                                $usuario=new UsuariosModelo();
                                $usuario->getById($id);  
                                $usuario->setActivoUsuario($activo);
                                $usuario->darseBaja();
                                require_once 'index.php';
                }

                


                public function error(){

			require_once('vistas/usuario/error.php');

		} 
                public function cerrarSesion(){
                    session_start();
                    $_SESSION['usuario']="";
                    $_SESSION['login']=FALSE;
                    session_destroy();
                    $_SESSION['usuario']="";
                    $_SESSION['login']=FALSE;
                    
                    echo '<script type="text/javascript">
			window.location.assign("index.php");
			</script>';
                                                
                    require_once 'ProductosControlador.php';
                    $_GET['id']=1;
                    $controller=new ProductosControlador();
                    $controller->index();
                }

	

	}





	//obtiene los datos del usuario desde la vista y redirecciona a UsuarioController.php

	if (isset($_POST['action'])) {

		$usuarioController= new UsuariosControlador();

		//se añade el archivo usuario.php

		require_once('modelos/UsuariosModelo.php');

		

		//se añade el archivo para la conexion

		require_once('modelos/ConectarModelo.php');



		

	}



	//se verifica que action esté definida

	if (isset($_GET['action'])) {

		if ($_GET['action']!='registrar' & $_GET['action']!='index') {

			require_once('modelos/ConectarModelo.php');

			$usuarioController=new UsuariosControlador();

			//para eliminar

			/*if($_GET['action']=='darseBajaUsuario') {		
                            
                            require_once('modelos/UsuariosModelo.php');
                            
                                $id=$_GET['id'];
                                
                                $usuario=new UsuariosModelo();
                                $usuario->getById($id);
                                $usuarioController->darseBajaUsuario($usuario);

                        }else*/

		}	

	}


