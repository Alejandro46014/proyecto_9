<!DOCTYPE html>

<html>
<head>
 <title>BeLight</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
  <div id="banner">
    <img src="https://i2.wp.com/itstacambaro.edu.mx/archivo/uploads/2015/12/banner-amarillo-web-CONTADOR.jpg?ssl=1">
  </div>

  <div id="menu">
    <div id="categorias">
      <a href=""><span>Patinetes</span></a>
      <a href=""><span>Bicicletas</span></a>
      <a href=""><span>NineBots</span></a>
      <a href=""><span>Segways</span></a>
      <a href=""><span>Monociclos</span></a>
      <a href=""><span>HoverBoards</span></a>
    </div>

    <div id="menu_sesion">
      <?php
      session_start();
      session_destroy();
      //se comprueba si existe alguna sesión o no, entonces se muestra menu de registro o menu del usuario
        if(session_status() == PHP_SESSION_ACTIVE){
          echo "<a href=''><div id='boton_usuario'>Usuario</div></a>";
        }else{
          echo "<a href=''><div id='boton_registro'>Registrarse</div></a>
          <a href=''><div id='boton_inicio_sesion'>Iniciar Sesión</div></a>";
        }
        ?>
      </div>
    </div>


</header>

<body>

  <div>
    <h1>Patinetes eléctricos<h1>
  </div>

  <div id="box">

    <?
    //bucle para ir sacando todos los productos
    ?>
    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

    <div class="item_box">
      <img src="https://tecnocio.com/52379-large_default/patinete-electrico-urban-fox-rocks-x2.jpg"/>

      <div class="item_title">
        <span>Patinete lo que sea</span>
      </div>

      <div class="item_desc">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor. In vitae est nec mi tristique aliquam. Donec porta ante id leo sollicitudin, ac volutpat justo lobortis.
        </span>
      </div>

      <div class="item_price">
        <span>Precio: xxx€</span>
      </div>
    </div>

  </div>

<body>

<footer>

  <div class="footer_apartado">
    <div class="footer_title">Sobre <font color="lightblue">Nosotros</font></div>
    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor.
    </span>
  </div>

  <div class="footer_apartado">
    <div class="footer_title">Últimos <font color="lightblue">tweets</font></div>
    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nibh leo, aliquet eu turpis a, sollicitudin mattis dui. Pellentesque sollicitudin pulvinar nulla id porta. Donec id massa eleifend, vestibulum sem quis, tincidunt dolor.
    </span>
  </div>

  <div class="footer_apartado">
    <div class="footer_title">Redes <font color="lightblue">sociales</font></div>
    <img src="https://image.flaticon.com/icons/png/512/33/33702.png">
    <img src="https://image.flaticon.com/icons/svg/23/23931.svg">
    <img src="https://cdn140.picsart.com/241272321041212.png?r1024x1024">
  </div>
</foter>

</html>
