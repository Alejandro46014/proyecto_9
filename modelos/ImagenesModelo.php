<?php

class ImagenesModelo{
    
    private $id_imagen;
    private $nombre_imagen;
    private $directorio_imagen;
    private $id_producto;
    
    public function __construct($nombre_imagen,$directorio_imagen,$id_producto) {
        
        $this->nombre_imagen=$nombre_imagen;
        $this->directorio_imagen=$directorio_imagen;
        $this->id_producto=$id_producto;
    }
    
    /*-------------------GETTERS--------------------*/
    
    public function getIdImagen(){
        
        return $this->id_imagen;
    }
    public function getIdProducto(){
        
        return $this->id_producto;
    }
    
    public function getNombreImagen(){
        
        return $this->nombre_imagen;
    }
    
    public function getDirectorioImagen(){
        
        return $this->directorio_imagen;
    }
    
    /*-------------------SETTERS--------------------*/
    
    public function setIdImagen($id){
        
         $this->id_imagen=$id;
    }
    
    public function setIdProducto($id){
        
         $this->id_producto=$id;
    }
    
    public function setNombreImagen($nombre_imagen){
        
         $this->nombre_imagen=$nombre_imagen;
    }
    
    public function setDirectorioImagen($directorio_imagen){
        
         $this->directorio_imagen=$directorio_imagen;
    }
    
    public function subirImagen($imagenes){
        
        $directorio = "img/articulos/";
	$directorio_imagen="img/articulos/".$_FILES['archivo']['name'];
	$tipo=$_FILES['archivo']['type'];
        
        $nombre_imagen=$_POST['mombre_imagen'];
	$jpeg="image/jpeg";
	$png="image/png";
	$gif="image/gif";
	$directorio = $directorio . basename( $_FILES['archivo']['name']); 
	if($tipo==$jpeg || $tipo==$gif || $tipo==$png){
	if(move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio)) {
		$imagen=['nombre_imagen'=>$nombre_imagen,'directorio_imagen'=>$directorio_imagen];
                $imagenes=$imagen;
		
		
		} else{
		
		echo('<script type="text/javascript">
		alert("Ha ocurrido un error, intentelo de nuevo!, si el problema persiste contacte con el administrador");
			</script>');
		
			
                }
	}else{
		echo('<script type="text/javascript">
		alert("No es un tipo de archivo permitido(.png || .jpeg || .gif)");
		</script>');
		
		
	}

        return $imagenes;
    }
}

