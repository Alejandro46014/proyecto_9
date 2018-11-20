<html>

<head>

	<title>Bienvenido MVC </title>

</head>

<body>
    
    <?php
    require_once 'modelos/UsuariosModelo.php';
    require_once 'modelos/ProductosModelo.php';
    $usuario=new UsuariosModelo();
    $usuario->setIdUsuario(2);
    $producto=new ProductosModelo();
    $producto->setIdProducto(1);
    ?>
<table border='1'>
		<tr>			
			<td><a href="?controller=Usuarios&action=registrar">Ingresar Usuarios</a></td>
			<td><a href="?controller=Usuarios&action=index">Index</a></td>
                        <td><a href="?controller=Usuarios&action=modificarUsuario&id=<?php echo $usuario->getIdUsuario(); ?>">Modificar usuario</a></td>
			<td><a href="?controller=Usuarios&action=listarUsuarios">Listar usuarios</a></td>
                        <td><a href="?controller=Usuarios&action=login">Login</a></td>
                        <td><a href="?controller=Usuarios&action=bajaVista&id=<?php echo $usuario->getIdUsuario(); ?>">Darse de baja</a></td>
		</tr>
                
                <tr>			
			<td><a href="?controller=Productos&action=nuevoProducto">Nuevo producto</a></td>
			<td><a href="?controller=Productos&action=index&id=1">Index productos</a></td>
                        <td><a href="?controller=Productos&action=modificarProducto">Modificar producto</a></td>
			<td><a href="?controller=Imagenes&action=nuevaImagen">Nueva imagen</a></td>
                        <td><a href="?controller=Imagenes&action=modificarImagen">Modificar imagen</a></td>
                        <td><a href="?controller=Valoraciones&action=nuevaValoracion&id=<?php echo $producto->getIdProducto(); ?>">Nueva valoración</a></td>
                        
		</tr>
                <tr>
                    <td><a href="?controller=Administrador&action=listarUsuarios">Gestionar usuarios</a></td>
                </tr>
	</table>
	<!--<table border='1'>

		<tr>			

			<td><a href="?controller=usuarios&action=registrar">Ingresar Usuarios</a></td>

                        <td><a href="?controller=usuarios&action=modificarUsuario&id=<?php echo $usuario->getIdUsuario(); ?>">Modificar usuario</a></td>
			<td><a href="?controller=administrador&action=listarUsuarios">prueba listar usuarios </a></td>
			<td><a href="?controller=usuarios&action=index">index</a></td>

		</tr>

	</table>-->

	<?php require_once('controladores/ControladorFrontal.php'); ?>

</body>

</html>