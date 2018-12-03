<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../../css/normalize.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">-->


	<link rel="stylesheet" href="../../css/estilos _p9.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


	<?php
	$archivo=basename($_SERVER['PHP_SELF']);
	$pagina=str_replace(".php","",$archivo);

	if($pagina==='invitados' || $pagina==='index'){

		echo('<link rel="stylesheet" href="../../css/colorbox.css">');
	}elseif($pagina==='conferencias'){

		echo('<link rel="stylesheet" href="../../css/lightbox.css">');
	}
	?>
</head>

<body class="<?php echo($pagina); ?>">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <header class="site-header">

	  <div class="contenido-header">

		 <img src="../../img/cabecera_peliculas.png" alt="Cabecera"/>

	  </div><!--.contenido_header-->
	</header>

	<?php  require_once("../includes/navegacion_administrador.php");?>

	<!--contenido principal-->

<section class="seccion">
	<div class="formulario clearfix">
		<form action="?controller=Administrador&action=buscarUsuarios" method="post">
		<div class="col_3_formulario">
			<label for="id_usuario">Id usuario:<br> <input type="number" id="id_usuario" name="id_usuario"/></label>
		</div>
		<div class="col_3_formulario">
			<label for="estado_valoracion">Estado valoración:<br>
                <select name="estado_valoracion">
                    <option value="">--Estado valoracion--</option>
                    <option value="Si">Bloqueada</option>
                    <option value="No">Activa</option>


                </select>
            </label>
		</div>
		<div class="col_3_formulario">
			<label for="id_producto">Id Producto:<br><input type="number" id="id_producto" name="id_producto"/></label>
		</div>
			<div class="col_formulario">
				<input type="submit" name="buscar" value="Buscar" class="buttom_green"/>
			</div>
		</form>
	</div>
	<div class="lista_usuarios">
	<div class="tabla">

		<table class="tabla">

	<tr>
		<th>Id</th>
		<th>Comentario</th>
		<th>Valor votación</th>
		<th>Usuario</th>
		<th>Producto</td>


		<th colspan=2 >Acciones</th>
	</tr>
<?php foreach ($usuarios as $usuario) { ?>

			<tr>
				<td><?php echo $valoracion->getIdUsuario(); ?></td>
				<td><?php echo $valoracion->getNombreUsuario(); ?></td>
				<td><?php echo $valoracion->getApellidosUsuario(); ?></td>
				<td><?php echo $valoracion->getIdUsuario();?></td>
				<td><?php echo $valoracion->getIdProducto();?></td>

				<td><a href="?controller=Administrador&action=bloquearUsuario&id=">Bloquear</a> </td>
			</tr>

	<?php } ?>
</table>
		</div>
	</div>

	</section>

<?php require_once("../includes/footer.php")?>

	<!--LINKADO DE JAVASCRIPT-->


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="../../js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
