<?PHP

class valoracionesModelo{
	
	private $id_valoracion,$id_usuario,$id_producto,$valor_votacion,
                $numero_votaciones,$fecha_valoracion,$comentario,$bloqueada,$votos;
	
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
        
        public function getVotos(){
		
		return($this->votos);
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

                public function setVotos($votos){
		
		$this->votos=$votos;
	}
        
        public function setBloqueada($bloqueada){
		
		$this->bloqueada=$bloqueada;
	}
        
        /*---------------------VALORAR--------------------*/
        
        public function buscarValoraciones($id_usuario,$id_producto,$bloqueada){
            
            require_once 'modelos/ConectarModelo.php';
            
            
            try{
                $conexion= ConectarModelo::conexion();
                
                $listaValoraciones=[];
                
                 $sql="SELECT * FROM valoraciones   WHERE"
                        . " usuarios_id_usuario LIKE :id_usuario OR productos_id_producto LIKE :id_producto OR bloqueada LIKE :bloqueada";
                $consulta=$conexion->prepare($sql);
                
                $consulta->bindParam(':id_usuario',$id_usuario,PDO::PARAM_INT);
                $consulta->bindParam(':id_producto',$id_producto,PDO::PARAM_INT);
                $consulta->bindParam(':bloqueada',$bloqueada,PDO::PARAM_STR);
                $consulta->execute();
                $resultado=$consulta->fetchAll();
                
                if(!$resultado){
                    echo '<script type="text/javascript">
				alert("No existe ninguna valoracion con esos criterios de busqueda");
				</script>';
                }else{
                    
                   
                    foreach ($resultado as $fila){
                        
                        $valoracion=new valoracionesModelo();
                        
                        $valoracion->id_usuario=$fila['usuarios_id_usuario'];
                        $valoracion->id_producto=$fila['productos_id_producto'];
                        $valoracion->id_valoracion=$fila['id_valoracion'];
                        $valoracion->bloqueada=$fila['bloqueada'];
                        $valoracion->valor_votacion=$fila['valor_votacion'];
                        $valoracion->numero_votaciones=$fila['numero_votaciones'];
                        $valoracion->comentario=$fila['comentario'];
                        
                        
                        $listaValoraciones[]=$valoracion;
                    } 
                }
                $consulta->closeCursor();
            } catch (PDOException $e) {
                
                die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
            }
            $conexion=null;
            
            return $listaValoraciones;
        }
        
        public function getTodo(){
            
            require_once 'ConectarModelo.php';
            try{
            $conexion= ConectarModelo::conexion();
            
		$listaValoraciones=[];
                
            $sql="SELECT * FROM valoraciones   ORDER BY id_valoracion DESC";
				
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
			
	    $resultado=$consulta->fetchAll();
				
				foreach ($resultado as $fila) {
					
					$valoracion=new valoracionesModelo();
					
					$valoracion->id_valoracion=$fila['id_valoracion'];
					$valoracion->id_usuario=$fila['usuarios_id_usuario'];
					$valoracion->id_producto=$fila['productos_id_producto'];
					$valoracion->valor_votacion=$fila['valor_votacion'];
					$valoracion->numero_votaciones=$fila['numero_votaciones'];
					$valoracion->comentario=$fila['comentario'];
					$valoracion->bloqueada=$fila['bloqueada'];
					
					
			$listaValoraciones[]= $valoracion;

		}

		

				$consulta->closeCursor();
			
				
			}catch(PDOException $e){
				
				die ("Error ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
			}
			
			$conexion=null;
			
            return $listaValoraciones;
        }

                public function valorar($usuario,$producto,$valoracion){
		
		require_once("ConectarModelo.php");
                require_once("UsuariosModelo.php");
                require_once("ProductosModelo.php");
		
		$id_usuario=$usuario->getIdUsuario();
		$tipo_usuario=$usuario->getTipoUsuario()->getTipoUsuario();
		$id_producto=$producto->getIdProducto();
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
				alert("Enhorabuena melón");
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
        
        public function bloquear($id){
            
            require_once("ConectarModelo.php");
		
            $bloqueada='Si';
		
	try{	
		$conexion= ConectarModelo::conexion();
			
		$sql="UPDATE valoraciones SET bloqueada=:bloqueada WHERE id_valoracion=:id";
		
		$consulta=$conexion->prepare($sql);
		
		$consulta->bindParam(':id',$id,PDO::PARAM_INT);
                $consulta->bindParam(':bloqueada',$bloqueada,PDO::PARAM_STR);
		
		
		$resultado=$consulta->execute();
                
		if($resultado){
				
				echo '<script type="text/javascript">
				alert("La valoración sé bloqueó correctamente");
				</script>';
			
				
			}else{
				
				echo '<script type="text/javascript">
				alert("La valoración sé pudo bloquear");
				</script>';
			
				
			}
		$consulta->closeCursor();
		
		
		
	}catch(PDOException $e){
		
		die ("Error ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
	}
		$conexion=null;
		
		return($resultado);
		
	
        }
        
        public function desbloquear($id){
            
            require_once("ConectarModelo.php");
		
            $bloqueada='No';
		
	try{	
		$conexion= ConectarModelo::conexion();
			
		$sql="UPDATE valoraciones SET bloqueada=:bloqueada WHERE id_valoracion=:id";
		
		$consulta=$conexion->prepare($sql);
		
		$consulta->bindParam(':id',$id,PDO::PARAM_INT);
                $consulta->bindParam(':bloqueada',$bloqueada,PDO::PARAM_STR);
		
		
		$resultado=$consulta->execute();
                
		if($resultado){
				
				echo '<script type="text/javascript">
				alert("La valoración sé desbloqueó correctamente");
				</script>';
			
				
			}else{
				
				echo '<script type="text/javascript">
				alert("La valoración sé pudo desbloquear");
				</script>';
			
				
			}
		$consulta->closeCursor();
		
		
		
	}catch(PDOException $e){
		
		die ("Error ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
	}
		$conexion=null;
		
		return($resultado);
		
	
        }
	
	
}
?>