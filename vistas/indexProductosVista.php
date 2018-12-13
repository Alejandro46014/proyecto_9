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
        <div class="portada"><img src="<?php echo $imagen->getDirectorioImagen();  ?>" alt="Portada"/></div>
        
            <?php } }?> 
            <div class="foto_miniatura clearfix">
            <?php foreach($producto->getImagenes() as $imagen) {  
            if($imagen->getNombreImagen()=="Escena") { ?>
        
          <div class="foto">
          <a href="<?php echo $imagen->getDirectorioImagen();  ?>"><img src="<?php echo $imagen->getDirectorioImagen();  ?>" alt="Escena"/></a>
          
          </div><!--div .foto-->
            <?php } }  ?>
      </div><!--div .foto_miniatura-->
      
        
      <div class="item_title">
    
                <span><?php echo $producto->getNombreProducto();  ?></span>
        </div>
        <div class="item_title">
    
                <span><?php echo $producto->getNombreOriginalProducto();  ?></span>
        </div>
        <div class="item_desc">
        <p><?php echo $producto->getSinopsis();  ?></p>
      </div>
      <div class="item_reparto">
      <ul>
      <li><b>Director:</b> <?php echo $producto->getDirector();  ?></li>
      <li><b>Reparto:</b> <?php echo $producto->getReparto();  ?></li>
      <li><b>Año lanzamiento:</b> <?php echo $producto->getAnioLanzamiento();  ?></li>
            
      </ul>
      </div>

      <div class="item_valoracion">
        
            <?php 
            $valoracion_media=$producto->getValoracionMedia();
            $media= round($valoracion_media->getValorVotacion() / $valoracion_media->getNumeroVotaciones());
            
            ?>
			<h4>Valoración media </h4>
                                             
                        
  <h2 class="clasificacion">
   <?php
    $cont=0;
                        
    while($cont<$media){
    echo "<span class='estrella_fija'>★</span>";
    $cont ++;
    }
   ?>
  </h2>              

      </div>
      <?php if($_SESSION['login']==true){ ?>
      <div class='item_desc'>
           <a href='?controller=Valoraciones&action=nuevaValoracion&id=<?php echo $producto->getIdProducto();?>' class='buttom_green'>Valorar</a>
    </div> 
    <?php } ?>
      <?php $valoraciones=$producto->getValoracionesBBDD($producto->getIdProducto()); ?>
      <?php foreach ($valoraciones as $valoracion){  
                    $usuario=new UsuariosModelo();
                    $id_usuario=$valoracion->getIdUsuario();
                    $usuario=$usuario->getById($id_usuario);
                   
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
				
  <p class="clasificacion">Valor votación:
    <?php
    $cont=0;
    while($valoracion->getValorVotacion()>$cont){
      echo "<span class='estrella_fija'>★</span>";
      $cont ++;
    }
    
    ?>
  </p>

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