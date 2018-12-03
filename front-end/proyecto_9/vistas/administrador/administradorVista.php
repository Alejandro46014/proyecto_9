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

  <link rel="stylesheet" href="css/normalize.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">-->
	
  
	<link rel="stylesheet" href="css/estilos _p9.css">
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

<body class="<?php echo($pagina); ?>">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <header class="site-header">
	
	  <div class="contenido-header">
		
		 <img src="img/cabecera_peliculas.png" alt="Cabecera"/>
		 
	  </div><!--.contenido_header-->
	</header>

	<div class="barra">
	  <div class="barra_contenedor clearfix">
	
		<div class="menu-movil">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="navegacion-principal">
			<a href="conferencias.php">Gestionar usuarios</a>
			<a href="calendario.php">Nuevo producto</a> 
			<a href="invitados.php">Modificar producto</a> 
			<a href="registro.php">Gestionar valoraciones</a>
			
			<a class="user-icono" href="#"><i class="fas fa-user"></i><spam>Alejandro</spam></a></nav>
			<div class="extendido-usuarios">
				<a  href="#">Modificar perfil</a>
   				<a  href="#">Darse de baja</a>
    			<a  href="#">Cerrar sesión</a>
				
 			 </div>
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->
			
	<!--contenido principal-->
	
<!--FOOTER-->
	
	
	
	
	<!--LINKADO DE JAVASCRIPT-->
	
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
