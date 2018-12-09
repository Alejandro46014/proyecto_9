
<div class="barra">
		<div class="barra_contenedor clearfix">
	
		<div class="menu-movil">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="navegacion-principal">
			<a href="?controller=Productos&action=index&id=1">Acción</a>
			<a href="?controller=Productos&action=index&id=2">Terror</a> 
			<a href="?controller=Productos&action=index&id=3">Románticas</a> 
			<a href="?controller=Productos&action=index&id=4">Infantiles</a> 
			<a href="?controller=Productos&action=index&id=5">Comedia</a>
			<a href="?controller=Productos&action=index&id=6">Ciencia-ficción</a> 
			<a href="?controller=Productos&action=index&id=7">Drama</a> 
			<a href="?controller=Productos&action=index&id=8">Musicales</a> 
			<a class="user-icono enlace_usuarios" href="#"><i class="fas fa-user"></i><spam><?php echo $usuario->getNombreUsuario();  ?></spam></a>
                </nav>
			<div class="extendido-usuarios">
				<a  href="?controller=Usuarios&action=modificarUsuario&id=<?php echo($usuario->getIdUsuario()); ?>">Modificar perfil</a>
   				<a  href="?controller=Usuarios&action=bajaVista&id=<?php echo($usuario->getIdUsuario()); ?>">Darse de baja</a>
                                <a  href="?controller=Usuarios&action=cerrarSesion">Cerrar sesión</a>
				
 			 </div>
                    
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->
<?php require_once 'controladores/ControladorFrontal.php';  ?>