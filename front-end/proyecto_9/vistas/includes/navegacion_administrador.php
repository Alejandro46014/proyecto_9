<div class="barra">
	  <div class="barra_contenedor clearfix">
	
		<div class="menu-movil">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="navegacion-principal">
			<a href="?controller=Administrador&action=listarUsuarios">Gestionar usuarios</a>
			<a href="?controller=Productos&action=nuevoProducto">Nuevo producto</a> 
			<a href="?controller=Productos&action=modificarProducto">Modificar productos</a> 
			<a href="?controller=Valoraciones&action=listarValoraciones">Gestionar valoraciones</a>
			
			<a class="user-icono" href="#"><i class="fas fa-user"></i><spam>Administrador<?php //echo($usuario->getNombreUsuario()); ?></spam></a></nav>
			<div class="extendido-usuarios">
				<a  href="?controller=Usuarios&action=modificarUsuario&id=<?php //echo($usuario->getIdUsuario()); ?>">Modificar perfil</a>
   				<a  href="?controller=Usuarios&action=darseBaja&id=<?php //echo($usuario->getIdUsuario()); ?>">Darse de baja</a>
    			<form action="#" method="post">
				<input type="submit" name="cerrar_sesion" class="">
				</form>
				
 			 </div>
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->