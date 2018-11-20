<?php
session_start();
//require_once("modelos/UsuariosModelo.php");
//require_once("modelos/AdministradorModelo.php");

?>



<?php
//require_once("modelos/UsuariosModelo.php");

require_once('modelos/ConectarModelo.php');


	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 

	//si la variable controller y action son pasadas por la url desde layout.php entran en el if

	if (isset($_GET['controller'])&&isset($_GET['action'])) {

		$controller=$_GET['controller'];

		$action=$_GET['action'];		

	} else {

		$controller='Productos';

		$action='index';

	}	
	//carga la vista layout.php
       
	require_once('vistas/layoutVista.php');
 
?>
<?php

/*if(isset($_POST['login'])){
	
	$usuario=new UsuariosModelo();
	$usuario->login();
	
	
}*/
//if(isset($_POST['guardar'])){
	
	/*$apellido1=$_POST['apellido1'];
		$apellido2=$_POST['apellido2'];
		$apellidos=$apellido1." ".$apellido2;
	echo($apellidos);*/
	
	//$usuario=new UsuariosModelo();
	//$usuario->crearUsuario();
	
	/*$usuario=$usuario->getById(1);
	
		
		echo($usuario->getNombreUsuario()." ");
		echo($usuario->getApellidosUsuario()." ");
		echo($usuario->getFechaNacimiento()." ");
		echo($usuario->getFechaAltaUsuario()." ");
		echo($usuario->getTipoUsuario());*/
	
	//$usuario->darseBaja();
	/*$usuario->crearUsuario();
		$apellido1=$_POST['apellido1'];
		$apellido2=$_POST['apellido2'];
		$apellidos=$apellido1." ".$apellido2;
	
	echo $apellidos;
	$usuario->setApellidos($apellidos);
	echo($usuario->getApellidos());*/
	
	/*				$admin=new AdministradorModelo();
	echo $admin->getTipoUsuario();
}

if(isset($_POST['login'])){
	
	$usuario=new UsuariosModelo();
	
	$usuario=$usuario->login();
}*/
//}




