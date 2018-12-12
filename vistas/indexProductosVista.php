<?php
      if(isset($_SESSION['usuario'])){
          session_start();
          $id=$_SESSION['usuario'];
          $usuario=new UsuariosModelo();
          $usuario=$usuario->getById($id);
      }
        if(isset($valorado)){
       session_start();
     $valorado=unserialize($_SESSION['valorado']);
        }
      ?>

<section class="seccion clearfix">
	<h1>Ultimas peliculas valoradas</h1>

<div id="box">

    <?php
   foreach($productos as $producto){
       if($producto->getIdProducto() != 0){ ?>

    <div class="item_box">
        <?php foreach($producto->getImagenes() as $imagen) {
            if($imagen->getNombreImagen() == "Portada"){
            ?>
        <img src="<?php echo $imagen->getDirectorioImagen();  ?>" alt="Portada"/>

            <?php } }?>
            <div class="foto_miniatura clearfix">
            <?php foreach($producto->getImagenes() as $imagen) {
            if($imagen->getNombreImagen()=="Escena") { ?>

          <div class="foto">
          <img src="<?php echo $imagen->getDirectorioImagen();  ?>" alt="Escena"/>

          </div><!--div .foto-->
            <?php } }  ?>
      </div><!--div .foto_miniatura-->


      <div class="item_title">

      <?php if($_SESSION['login']==true){ ?>

                <a href="?controller=Valoraciones&action=nuevaValoracion&id=<?php echo $producto->getIdProducto();?>">
                <span><?php echo $producto->getNombreProducto();  ?></span>
        </a>
        <?php }else{ ?>
                <span><?php echo $producto->getNombreProducto();  ?></span>

        <?php } ?>
      </div>

      <div class="item_desc">
        <p><?php echo $producto->getSinopsis();  ?></p>
      </div>

      <div class="item_valoracion">
        <form>
            <?php
            $valoracion_media=$producto->getValoracionMedia();
            $media= round($valoracion_media->getValorVotacion() / $valoracion_media->getNumeroVotaciones());

            ?>
			<h4>Valoración media <?php echo $media;  ?></h4>
                        <p><?php echo $valoracion_media->getVotos();  ?></p>
  <h2 class="clasificacion">
    <?php
    $cont=0;

    while($cont<$media){
    echo "<label>★</label>";
    $cont ++;
    }
   ?>
  </h2>
</form>
      </div>
      <?php $valoraciones=$producto->getValoracionesBBDD($producto->getIdProducto()); ?>
      <?php foreach ($valoraciones as $valoracion){
                    $usuario=new UsuariosModelo();
                    $usuario=$usuario->getById($valoracion->getIdUsuario());

                    ?>
		<div class="item_comentarios clearfix">
		<div class="autor_comentario">
                    <h4><?php echo $usuario->getNombreUsuario();  ?></h4>
			</div>
			<div class="item_comentario">
			<p><?php echo $valoracion->getComentario();  ?></p>
			</div>
			<div class="item_valoracion clearfix">
			<div class="valor_valoracion">
				<form>
  <p class="clasificacion">Valor votación:<?php echo $valoracion->getValorVotacion(); ?>
    <?php
    $cont=0;
    while($valoracion->getValorVotacion()>$cont){
      echo "<label>★</label>";
      $cont ++;
    }

    ?>
  </p>
</form>
				</div>
				<div class="fecha_valoracion">
				<p> <?php echo $valoracion->getFechaValoracion();  ?></p>
				</div>
			</div>

		</div>
      <?php } ?>
    </div><!--.item_box-->



   <?php } }  ?>
</div><!--#BOX-->
</section>
