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

		echo('<link rel="stylesheet" href="css/colorbox.css">');
	}elseif($pagina==='conferencias'){

		echo('<link rel="stylesheet" href="css/lightbox.css">');
	}
	?>

</head>

<body>
<?php require_once("../includes/header.php");  ?>

<?php require_once("../includes/navegacion_usuarios.php");  ?>


<!--CONTENIDO-->
<section class="seccion">

	<div class="formulario_small clearfix">
	<div class="cabecera_formularios">
		<h3>¿Realmente desea darse de baja??</h3>
		<form action="?controller=Usuarios&action=darseBajaUsuario&id=<?php //echo $usuario->getIdUsuario(); ?>" method="post">
		<div class="col_formulario">
			<input type="submit" name="aceptar" class="buttom_green" value="Aceptar"/>
			</div>
			<div class="col_formulario">
			<input type="submit" name="cancelar" class="buttom_red" value="Cancelar"/>
			</div>
		</form>
		</div>
	</div>
</section>


<?php require_once("../includes/footer.php");  ?>

<!--LINKADO DE JAVASCRIPT-->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
