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
		<div class="contenedor clearfix">
	
		<div class="menu-movil">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="navegacion-principal">
			<a href="conferencias.php">Acción</a>
			<a href="calendario.php">Románticas</a> 
			<a href="invitados.php">Terror</a> <a href="registro.php">NineBots</a> 
			<a href="registro.php">Comedia</a>
			<a href="registro.php">Drama</a> 
			<a href="registro.php">Ciencia-ficción</a> 
			<a class="user-icono" href="#"><i class="fas fa-user"></i><spam>Alejandro</spam></a></nav>
			<div class="extendido-usuarios">
				<a  href="#">Modificar perfil</a>
   				<a  href="#">Darse de baja</a>
    			<a  href="#">Cerrar sesión</a>
				
 			 </div>
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->

<section class="seccion">
<div class="formulario clearfix">
	<div class="cabecera_formularios">
		<h3>Formulario de alta en la web</h3>
	<form method="post" action="alta.php">
		</div>
	<div class="col_2_formulario">
	
            <label for="nombre">* Nombre: <input type="text" name="nombre_usuario" required="true" id="nombre" value="<?php //echo $usuario->getNombreUsuario(); ?>"/></label>
	</div>
	<div class="col_2_formulario">
	
             <label for="apellidos"> * Primer apellido: <input type="text"  name="apellidouno_usuario" required="true" id="apellidouno" value="<?php //echo $usuario->getApellidosUsuario(); ?>"/></label>
    </div>
    <div class="col_2_formulario">
	
             <label for="apellidos"> Segundo apellido: <input type="text" name="apellidodos_usuario" id="apellidodos" value="<?php //echo $usuario->getApellidosUsuario(); ?>"/></label>
	</div>
		<div class="col_2_formulario">
	
            <label for="email"> * Correo electrónico: <input type="email" name="email_usuario" required="true" id="email" value="<?php //echo $usuario->getEmailUsuario(); ?>"/></label>
	</div>
	<div class="col_2_formulario">
	
            <label for="password"> * Contraseña: <input type="password" name="password_usuario" required="true" id="password" value="<?php //echo $usuario->getpasswordUsuario(); ?>"/></label>
	</div>
    <div class="col_2_formulario">
	
    <label for="rpassword"> * Repite contraseña: <input type="password" name="rpassword_usuario" required="true" id="rpassword"></label>
</div>
    
    
    <div class="col_2_formulario">
	
            <label for="pais"> * Pais: <input type="text" name="pais_usuario" id="pais" value="<?php //echo $usuario->getPaisUsuario(); ?>"/></label>
	</div>
		<div class="col_2_formulario">
	
            <label for="fecha_nacimiento"> * Fecha de nacimiento: <input type="date" name="fecha_nacimiento_usuario" min="1918-12-31" max="2000-12-31" id="fecha_nacimiento" value="<?php echo $_POST['fecha_nacimiento_usuario'] ?>"/></label>
	</div>
		<div class="col_formulario">
			
			<input class="buttom_green" type="submit" value="Darse de alta" />
		</div>
        <div class="leyenda">
        <p ><b>* los campos marcados con este símbolo son obligatorios</b></p>
        </div>	

	</form>
 </div>
	</div>

    
 </div>
<!--FOOTER-->
	
	<footer class="site-footer">
		<div class="contenedor clearfix">
			<div class="footer-informacion">
			<h3>Sobre <span>evaluaweb</span></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</p>
			</div>
			<div class="ultimos-tweets">
			<h3>Ultimos <span>tweets</span></h3>
				<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</li>
				</ul>
			</div>
			<div class="menu-footer">
			<h3>Redes <span>sociales</span></h3>
				<nav class="redes-sociales-footer">
		    <a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
			<a href="#"><i class=" fab fa-twitter-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-pinterest-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-instagram-square" aria-hidden="true"></i></a>
			
		  </nav>
			</div>
		</div>
		<p class="copyright">Todos los derechos reservados 2018</p>
	</footer>
	
	
	
	<!--LINKADO DE JAVASCRIPT-->
	
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
