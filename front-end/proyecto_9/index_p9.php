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
				<a  href="vistas/usuario/modificarUsuarioVista.php">Modificar perfil</a>
   				<a  href="vistas/usuario/bajaVista.php">Darse de baja</a>
    			<a  href="#">Cerrar sesión</a>

 			 </div>
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->

	<!--Contenido peliculas-->

	<section class="seccion clearfix">
	<h1>Ultimas peliculas valoradas</h1>
	 <div id="box">

    <?
    //bucle para ir sacando todos los productos
    ?>
    <div class="item_box">
      <img src="img/Atrapen_al_gringo_Caratula.jpg"/>

      <div class="item_title">
        <span>Atrapen al gringo</span>
      </div>

      <div class="item_desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </p>
      </div>

      <div class="item_valoracion">
        <form>
			<h4>Valoración media</h4>
  <h2 class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </h2>
</form>
      </div>
		<div class="item_comentarios clearfix">
		<div class="autor_comentario">
			<h4>Angel Iranzo</h4>
			</div>
			<div class="item_comentario">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam.
				Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.</p>
			</div>
			<div class="item_valoracion clearfix">
			<div class="valor_valoracion">
				<form>
  <p class="clasificacion">Valor votación:
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </p>
</form>
				</div>
				<div class="fecha_valoracion">
				<p> 23 Julio 2018</p>
				</div>
			</div>

		</div>
    </div><!--.item_box-->

	<div class="item_box">
      <img src="img/Atrapen_al_gringo_Caratula.jpg"/>

      <div class="item_title">
        <span>Atrapen al gringo</span>
      </div>

      <div class="item_desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </p>
      </div>

      <div class="item_valoracion">
        <form>
			<h4>Valoración media</h4>
  <h2 class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </h2>
</form>
      </div>
		<div class="item_comentarios clearfix">
		<div class="autor_comentario">
			<h4>Angel Iranzo</h4>
			</div>
			<div class="item_comentario">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam.
				Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.</p>
			</div>
			<div class="item_valoracion clearfix">
			<div class="valor_valoracion">
				<form>
  <p class="clasificacion">Valor votación:
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </p>
</form>
				</div>
				<div class="fecha_valoracion">
				<p> 23 Julio 2018</p>
				</div>
			</div>

		</div>
    </div><!--.item_box-->

		 <div class="item_box">
      <img src="img/Atrapen_al_gringo_Caratula.jpg"/>

      <div class="item_title">
        <span>Atrapen al gringo</span>
      </div>

      <div class="item_desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </p>
      </div>

      <div class="item_valoracion">
        <form>
			<h4>Valoración media</h4>
  <h2 class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </h2>
</form>
      </div>
		<div class="item_comentarios clearfix">
		<div class="autor_comentario">
			<h4>Angel Iranzo</h4>
			</div>
			<div class="item_comentario">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui.
			Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam.
				Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.</p>
			</div>
			<div class="item_valoracion clearfix">
			<div class="valor_valoracion">
				<form>
  <p class="clasificacion">Valor votación:
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </p>
</form>
				</div>
				<div class="fecha_valoracion">
				<p> 23 Julio 2018</p>
				</div>
			</div>

		</div>
    </div><!--.item_box-->

		</div><!--#box-->
	</section>


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
