<?PHP

class valoracionesModelo{
	
	private $id_valoracion,$id_usuario,$id_producto,$valor_votacion,
                $numero_votaciones,$fecha_valoracion,$comentario,$bloqueada;
	
	public function __construct(){
		
           
	}
	
	/*-------------------------GETTERS-----------------------------*/
	public function getIdValoracion(){
		
		return($this->id_valoracion);
	}
	
	public function getIdUsuario(){
		
		return($this->id_usuario);
	}
	
	public function getIdProducto(){
		
		return($this->id_producto);
	}
	
	public function getValorVotacion(){
		
		return($this->valor_votacion);
	}
	
	public function getNumeroVotaciones(){
		
		return($this->numero_votaciones);
	}
        
        public function getFechaValoracion(){
            
            return $this->fecha_valoracion;
        }

                public function getComentario(){
		
		return($this->comentario);
	}
	
	public function getBloqueada(){
		
		return($this->bloqueada);
	}
	
	/*-------------------------SETTERS-----------------------------*/
	
	public function setIdValoracion($id_valoracion){
		
		$this->id_valoracion=$id_valoracion;
	}
	
	public function setIdUsuario($id_usuario){
		
		$this->id_usuario=$id_usuario;
	}
	
	public function setIdProducto($id_producto){
		
		$this->id_producto=$id_producto;
	}
	
	public function setValorVotacion($valor_votacion){
		
		$this->valor_votacion=$valor_votacion;
	}
	
	public function setNumeroVotaciones($numero_votaciones){
		
		$this->numero_votaciones=$numero_votaciones;
	}
	
	public function setComentario($comentario){
		
		$this->comentario=$comentario;
	}
        
        public function setFechaValoracion($fecha_valoracion){
            
            $this->fecha_valoracion=$fecha_valoracion;
        }

                public function setBloqueada($bloqueada){
		
		$this->bloqueada=$bloqueada;
	}
        
        /*---------------------VALORAR--------------------*/
	
	public function valorar($usuario,$producto,$valoracion){
		
		require_once("ConectarModelo.php");
                require_once("UsuariosModelo.php");
                require_once("ProductosModelo.php");
		
		$id_usuario=$usuario->getIdUsuario();
		$tipo_usuario=$usuario->getTipoUsuario()->getTipoUsuario();
		$id_producto=$valoracion->id_producto=$producto->getIdProducto();
		$voto= $valoracion->valor_votacion;
		$comentario=$valoracion->comentario;
                $fecha_valoracion=$valoracion->fecha_valoracion->format("Y-m-d H:i:s");
             
                if(empty($id_producto)){
                    echo '<p>No se pudo rescatar el usuario</p>';
                }
                if (empty($id_producto)){
                    echo '<p>No se pudo rescatar el producto';
                }
                if(empty($comentario) || empty($voto)){
                    
                    echo('<script type="text/javascript">
				alert("Debe introducir un comentario y una votación ");
				</script>');
                 
                 
                    require_once 'vistas/usuario/nuevaValoracionVista.php';
                    exit();
                }
		
		if($tipo_usuario=="Usuario_novel"){
			
			$numero_votaciones=1;
			$voto=$voto;
			
		}elseif($tipo_usuario=="Usuario_experto"){
			
			$numero_votaciones=2;
			$voto=$voto * 2;
			
		}elseif($tipo_usuario=="Usuario_profesional"){
			
			$numero_votaciones=3;
			$voto=$voto * 3;
		}
		
		try{
		$conexion=ConectarModelo::conexion();
		
		$sql="INSERT INTO valoraciones (usuarios_id_usuario,productos_id_producto,valor_votacion,numero_votaciones,fecha_valoracion,comentario,bloqueada)"
                        . "VALUES (:id_usuario,:id_producto,:valor_votacion,:numero_votaciones,:fecha_valoracion,:comentario,'No')";
		
		$consulta=$conexion->prepare($sql);
		
		$consulta->bindParam(':id_usuario',$id_usuario,PDO::PARAM_INT);
		$consulta->bindParam(':id_producto',$id_producto,PDO::PARAM_INT);
		$consulta->bindParam(':valor_votacion',$voto,PDO::PARAM_INT);
                $consulta->bindParam(':fecha_valoracion',$fecha_valoracion,PDO::PARAM_STR);
		$consulta->bindParam(':numero_votaciones',$numero_votaciones,PDO::PARAM_INT);
		$consulta->bindParam(':comentario',$comentario,PDO::PARAM_STR);
		
		$resultado=$consulta->execute();
		$id_valoracion=$conexion->lastInsertId();
                $valoracion->setIdValoracion($id_valoracion);
			if(!$resultado){
				
				echo('<script type="text/javascript">
				alert("Hubo un error durante el proceso de votación, contacte con el administrador ");
				</script>');
			}else{
                            
                            echo('<script type="text/javascript">
				alert("Enorabuena melón");
				</script>');
                        }
		
		$consulta->closeCursor();
			
		}catch(PDOException $e){
			
			die ("Error ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
			
		}
		
		$conexion=null;
		
		return($valoracion);
	}
	
	
}
?>