<?php
require_once 'CategoriasProductosModelo.php';
require_once 'ImagenesModelo.php';
require_once 'ValoracionesModelo.php';
class ProductosModelo{
	
	private $id_producto,$nombre_producto,$nombre_original_producto,$anio_lanzamiento,$sinopsis,
	$reparto,$director,$categoria;
        private $valoraciones=[]; 
        private $imagenes=[];


        public function __construct(){
            //$this->categoria=new CategoriasProductosModelo($id_categoria);
	}
        
        


        /*-------------------------GETTERS-----------------------------*/
	public function getIdProducto(){
		
		return($this->id_producto);
	}
	
	public function getNombreProducto(){
		
		return($this->nombre_producto);
	}
        
        public function getNombreOriginalProducto(){
		
		return($this->nombre_original_producto);
	}
	
	public function getAnioLanzamiento(){
		
		return($this->anio_lanzamiento);
	}
	
	public function getSinopsis(){
		
		return($this->sinopsis);
	}
	
	public function getReparto(){
		
		return($this->reparto);
	}
	
	public function getDirector(){
		
		return($this->director);
	}
	
	public function getCategoria(){
		
		return($this->categoria);
	}
        
        public function getValoraciones(){
            
            return$this->valoraciones;
        }
        
         public function getImagenes(){
            
            return$this->imagenes;
        }


        /*-------------------------SETTERS-----------------------------*/
	
	public function setIdProducto($id){
		
		$this->id_producto=$id;
	}
	
	public function setNombreProducto($nombre){
		
		$this->nombre_producto=$nombre;
	}
        
        public function setNombreOriginalProducto($nombre_original){
		
		$this->nombre_original_producto=$nombre_original;
	}
	
	public function setAnioLanzamiento($anio){
		
		$this->anio_lanzamiento=$anio;
	}
	
	public function setSinopsis($sinopsis){
		
		$this->sinopsis=$sinopsis;
	}
	
	public function setReparto($reparto){
		
		$this->reparto=$reparto;
	}
	
	public function setDirector($director){
		
		$this->director=$director;
	}
	
	public function setCategoria($categoria){
		
		$this->categoria=$categoria;
	}
        
        public function setValoraciones($valoraciones){
            
            $this->valoraciones=$valoraciones;
        }
        public function setImagenes($imagenes){
            
            $this->imagenes=$imagenes;
        }


        /*---------------------------------GetTodo--------------------------------------*/
        public function getTodo(){
            require_once("ImagenesModelo.php");
            require_once("ConectarModelo.php");
		
		
		try{
                        $imagenes=[];
			$lista_productos=[];
			$conexion=ConectarModelo::conexion();
			
			$i=0;
            
            $sql="SELECT * FROM `productos` INNER JOIN imagenes ON productos.id_producto=imagenes.productos_id_producto  ORDER BY id_producto";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            $resultado=$consulta->fetchAll();
            
          
            if ($resultado){
                $i =0;
                foreach ($resultado as $fila){
                        if($i == 3){
                            $i=0;
                        }
                        
                $producto=new ProductosModelo();
                $producto->id_producto=$fila['id_producto'];
                $producto->categoria=new CategoriasProductosModelo($fila['categorias_productos_id_categoria']);
                $producto->nombre_producto=$fila['nombre_producto'];
                $producto->nombre_original_producto=$fila['nombre_original_producto'];
                $producto->anio_lanzamiento=$fila['anio_lanzamiento'];
                $producto->director=$fila['director'];
                $producto->reparto=$fila['reparto'];
                $producto->sinopsis=$fila['sinopsis'];
                
                 if ($fila['id_producto'] == $fila['productos_id_producto']){
                $imagen=new ImagenesModelo($fila['nombre_imagen'],$fila['directorio_imagen'],$fila['id_producto']);
                $imagen->setIdImagen($fila['id_imagen']);
                $imagenes[]=$imagen;
                 
                  }
                  if($i == 2){
                      $producto->setImagenes($imagenes);
                      $imagenes=NULL;
                  $lista_productos[]=$producto;
                  }
                   
                   $i++;
                    }
           
                }
                   
                   
			$consulta->closeCursor();
			
			
			
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
		}
		
		$conexion=null;
		
		return($lista_productos);
        }


        /*---------------------------------GetById--------------------------------------*/
	public function getById($id){
            
            require_once("ConectarModelo.php");
		
		
		try{
			
			$conexion=ConectarModelo::conexion();
			
			
			$sql="SELECT * FROM productos INNER JOIN imagenes ON productos.id_producto=imagenes.productos_id_producto  WHERE id_producto=:id";
			
			$consulta=$conexion->prepare($sql);
			
			$consulta->bindParam(':id',$id,PDO::PARAM_INT);
			
			$consulta->execute();
			$resultado=$consulta->fetchAll();
                        if ($resultado){
                            
                            echo 'Siiiiiii';
			foreach ($resultado as $fila){
                            
                            $producto=new ProductosModelo();
                            $producto->categoria=new CategoriasProductosModelo($fila['categorias_productos_id_categoria']);
                            $producto->id_producto=$fila['id_producto'];
                            $producto->nombre_producto=$fila['nombre_producto'];
                            $producto->nombre_original_producto=$fila['nombre_original_producto'];
                            $producto->anio_lanzamiento=$fila['anio_lanzamiento'];
                            $producto->sinopsis=$fila['sinopsis'];
                            $producto->reparto=$fila['reparto'];
                            $producto->director=$fila['director'];
                            $imagen=new ImagenesModelo($fila['nombre_imagen'],$fila['directorio_imagen'],$fila['id_producto']);
                            $imagen->setIdImagen($fila['id_imagen']);
                            $imagenes[]=$imagen;
                            $producto->setImagenes($imagenes);
                            
                        
                        }
                        }else{
                            echo 'Nooooooooo';
                        }
			$consulta->closeCursor();
			
			
			
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
		}
		
		$conexion=null;
		
		return($producto);
        }
        /*---------------------------NUEVO PRODUCTO ADMINISTRADOR---------------------*/
	
	
	public function guardar($imagenes){
		
		
		require_once("ConectarModelo.php");
                require_once("ImagenesModelo.php");
		
		try{
			$conexion=ConectarModelo::conexion();
			
			$nombre_producto= $this->nombre_producto;
                        $nombre_original_producto= $this->nombre_original_producto;
			$anio_lanzamiento= $this->anio_lanzamiento;
			$sinopsis= $this->sinopsis;
			$reparto= $this->reparto;
			$director= $this->director;
			$categoria= $this->categoria->getIdCategoria();
                        
                        $mal=FALSE;
                        $mal2=FALSE;
                        $mal3=FALSE;
                        $mal4=FALSE;
                        $mal5=FALSE;
                        $mal6=FALSE;
                    if (empty($nombre_producto)){
                        
                        echo '<p>El campo nombre imagen debe estar seleccionado</p>';
                        
                        $mal=TRUE;    
                    }
                    
                    if (empty($anio_lanzamiento)){
                            
                         echo '<p>El campo año de lanzamiento no puede estar vacío</p>';
                         
                        $mal2=TRUE;
                    }
                    
                    if (empty($sinopsis)){
                        
                        echo '<p>El campo sinopsis no puede estar vacío</p>';
                        
                        $mal3=TRUE;
                    }
                    
                    if (empty($reparto)){
                        
                        echo '<p>El campo reparto no puede estar vacío</p>';
                        
                        $mal4=TRUE;
                    }
                    
                    if (empty($categoria)){
                        
                        echo '<p>El campo categoria debe estar seleccionado</p>';
                        
                        $mal5=TRUE;
                    }
                    
                    if (empty($imagenes) || count($imagenes) != 3){
                        
                        echo '<script type="text/javascript">
				alert("Debe introducir las tres imagenes para dar de alta una pelicula");
				</script>';
                        $mal6=TRUE;
                    }
                    
                    if ($mal || $mal2 || $mal3 || $mal4 || $mal5 ||$mal6){
                        
                        echo '<script type="text/javascript">
				alert("Revise los campos e intentelo de nuevo");
				</script>';
                        
                    }
                        
			$conexion->beginTransaction();
                        
			$sql="INSERT INTO productos (nombre_producto,nombre_original_producto,anio_lanzamiento,sinopsis,reparto,director,categorias_productos_id_categoria)"
                                . " VALUES(:nombre,:nombre_original,:anio,:sinopsis,:reparto,:director,:categoria)";
			
			$consulta=$conexion->prepare($sql);
			
			$consulta->bindParam(':nombre',$nombre_producto,PDO::PARAM_STR);
                        $consulta->bindParam(':nombre_original',$nombre_original_producto,PDO::PARAM_STR);
			$consulta->bindParam(':anio',$anio_lanzamiento,PDO::PARAM_STR);
			$consulta->bindParam(':sinopsis',$sinopsis,PDO::PARAM_STR);
			$consulta->bindParam(':reparto',$reparto,PDO::PARAM_STR);
			$consulta->bindParam(':director',$director,PDO::PARAM_STR);
			$consulta->bindParam(':categoria',$categoria,PDO::PARAM_INT);
			
			$consulta->execute();
			$ultimo_id=$conexion->lastInsertId();
			
			$consulta->closeCursor();
                        
                        foreach ($imagenes as $imagen){
                            
                            $nombre_imagen=$imagen->getNombreImagen();
                            $directorio_imagen=$imagen->getDirectorioImagen();
                            
                            $sql="INSERT INTO imagenes (nombre_imagen,directorio_imagen,productos_id_producto) VALUES (:nombre_imagen,:directorio_imagen,:id_producto)";
                         
                            $consulta=$conexion->prepare($sql);
                            
                            $consulta->bindParam(':nombre_imagen',$nombre_imagen,PDO::PARAM_STR);
                            $consulta->bindParam(':directorio_imagen',$directorio_imagen,PDO::PARAM_STR);
                            $consulta->bindParam(':id_producto',$ultimo_id,PDO::PARAM_INT);
                            
                           $consulta->execute();
                            
                            $consulta->closeCursor();
                        }
                        $resultado=$conexion->commit();
                        
			if($resultado){
				
				
				echo '<script type="text/javascript">
				alert("El producto se creó correctamente");
				</script>';
				
				
			}else{
				
				echo '<script type="text/javascript">
				alert("El producto no se pudo guardar");
				</script>';
			}
                        
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
                        
                        $resultado=$conexion->rollBack();
                        
			if($resultado){
				
		echo('<script type="text/javascript">
			alert("Hubo un fallo durante la transacción, si el problema persiste, contacte con el administrador");
			</script>');
				
			}

		}
		
		$conexion=null;
		
	}
        
        /*---------------------------Actualizar ≤ productos------------------------------*/
        
        public function actualizar($id){
		
	
		require_once("ConectarModelo.php");
		
		try{
			$conexion=ConectarModelo::conexion();
			
			$nombre_producto= $this->nombre_producto;
                        $nombre_original_producto= $this->nombre_original_producto;
			$anio_lanzamiento= $this->anio_lanzamiento;
			$sinopsis= $this->sinopsis;
			$reparto= $this->reparto;
			$director= $this->director;
			$categoria= $this->categoria->getIdCategoria();
			
                        
                        $conexion->beginTransaction();
                                
			$sql="UPDATE productos  SET nombre_producto=:nombre, nombre_original_producto=:nombre_original, anio_lanzamiento=:anio,"
                                . " sinopsis=:sinopsis,reparto=:reparto, director=:director, categorias_productos_id_categoria=:categoria WHERE id_producto=:id";
			
			$consulta=$conexion->prepare($sql);
			
                        $consulta->bindParam(':id',$id,PDO::PARAM_INT);
			$consulta->bindParam(':nombre',$nombre_producto,PDO::PARAM_STR);
                        $consulta->bindParam(':nombre_original',$nombre_original_producto,PDO::PARAM_STR);
			$consulta->bindParam(':anio',$anio_lanzamiento,PDO::PARAM_STR);
			$consulta->bindParam(':sinopsis',$sinopsis,PDO::PARAM_STR);
			$consulta->bindParam(':reparto',$reparto,PDO::PARAM_STR);
			$consulta->bindParam(':director',$director,PDO::PARAM_STR);
			$consulta->bindParam(':categoria',$categoria,PDO::PARAM_STR);
                        
			
			$consulta->execute();
			
			
			$consulta->closeCursor();
                        
                        foreach ($this->imagenes as $imagen){
                            
                          $nombre_imagen=$imagen->getNombreImagen();
                          $directorio_imagen=$imagen->getDirectorioImagen();
                          $id_imagen=$imagen->getIdImagen();
                          
                          $sql="UPDATE imagenes SET nombre_imagen=:nombre_imagen,directorio_imagen=:directorio_imagen WHERE id_imagen=:id_imagen";
                          
                         $consulta=$conexion->prepare($sql);
                         
                        $consulta->bindParam(':nombre_imagen',$nombre_imagen,PDO::PARAM_STR);
			$consulta->bindParam(':directorio_imagen',$directorio_imagen,PDO::PARAM_STR);
                        $consulta->bindParam(':id_imagen',$id_imagen,PDO::PARAM_INT);
                        
                        $consulta->execute();
                            
                        }
                        
                        $resultado=$conexion->commit();
			
			if($resultado){
				
				
				echo '<script type="text/javascript">
				alert("El producto se actualizó correctamente");
				</script>';
				
				
			}else{
				
				echo '<script type="text/javascript">
				alert("El producto no se pudo actualizar");
				</script>';
			}
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
                        
                        $resultado=$conexion->rollBack();
                        
			if($resultado){
				
		echo('<script type="text/javascript">
			alert("Hubo un fallo durante la transacción, si el problema persiste, contacte con el administrador");
			</script>');
				
			}
		}
		
		$conexion=null;
		
	}
	
        
        
        /*---------------------------ELIMINAR PRODUCTO POR ID---------------------*/
	
	public function eliminar($id){
		
		require_once("ConectarModelo.php");
		
		
		try{
			$conexion=ConectarModelo::conexion();
			$sql="DELETE FROM productos WHERE id_producto=:id";
			
			$consulta=$conexion->prepare($sql);
			
			$consulta->bindParam(':id',$id,PDO::PARAM_INT);
			
			$resultado=$consulta->execute();
			
			if($resultado){
				
				
				echo '<script type="text/javascript">
				alert("El producto se eliminó correctamente");
				</script>';
				
				
			}else{
				
				echo '<script type="text/javascript">
				alert("El producto no se pudo eliminar");
				</script>';
			}
			
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
		}
		
		$conexion=null;
		
		
	}
	/*---------------------------LISTAR PRODUCTOS POR CATEGORIA---------------------*/
	
	public function getByCategoria($id_categoria){
            
		require_once("ConectarModelo.php");
		
		try{
			
			$conexion=ConectarModelo::conexion();
			 
			
			$sql="SELECT * FROM productos INNER JOIN imagenes ON id_producto=imagenes.productos_id_producto "
                                . "INNER JOIN valoraciones ON id_producto=valoraciones.productos_id_producto WHERE categorias_productos_id_categoria=:id_categoria";
			
			$consulta=$conexion->prepare($sql);
			
			$consulta->bindParam(':id_categoria',$id_categoria,PDO::PARAM_STR);
			
			$consulta->execute();
			$resultado=$consulta->fetchAll();
                        $num_filas=$consulta->rowCount();
			$producto=new ProductosModelo();
                        $producto->setIdProducto(0);
			$consulta->closeCursor();
			foreach ($resultado as $fila){
                           
                            if ($producto->id_producto != $fila['id_producto']){
                             
                                $productos[]=$producto;
                                $valoraciones=NULL;
                                $imagenes=NULL;
                                
                                $producto=new ProductosModelo();
                                $producto->id_producto=$fila['id_producto'];
                                $producto->nombre_producto=$fila['nombre_producto'];
                                $producto->nombre_original_producto=$fila['nombre_original_producto'];
                                $categoria=new CategoriasProductosModelo($fila['categorias_productos_id_categoria']);
                                $producto->categoria=$categoria;
                                $producto->anio_lanzamiento=$fila['anio_lanzamiento'];
                                $producto->sinopsis=$fila['sinopsis'];
                                $producto->director=$fila['director'];
                                $producto->reparto=$fila['reparto'];
                                
                                    $imagen=new ImagenesModelo($fila['nombre_imagen'],$fila['directorio_imagen'],$fila['productos_id_producto']);
                                    $imagen->setIdImagen($fila['id_imagen']);
                                    $imagenes[]=$imagen;
                                    $producto->setImagenes($imagenes);
                                    
                                $valoracion=new valoracionesModelo();
                                $valoracion->setIdValoracion($fila['id_valoracion']);
                                $valoracion->setIdProducto($fila['productos_id_producto']);
                                $valoracion->setIdUsuario($fila['usuarios_id_usuario']);
                                $valoracion->setNumeroVotaciones($fila['numero_votaciones']);
                                $valoracion->setValorVotacion($fila['valor_votacion']);
                                $valoracion->setFechaValoracion($fila['fecha_valoracion']);
                                $valoracion->setComentario($fila['comentario']);
                               
                                $valoraciones[]=$valoracion;
                                
                                $producto->setValoraciones($valoraciones);
                                
                            }
                            
                            if ($producto->id_producto == $fila['id_producto']){
                                
                                
                                    
                                if( $fila['id_imagen'] != $imagen->getIdImagen() && $fila['productos_id_producto'] == $producto->id_producto){
                                  
                                   
                                    $imagen=new ImagenesModelo($fila['nombre_imagen'],$fila['directorio_imagen'],$fila['productos_id_producto']);
                                    $imagen->setIdImagen($fila['id_imagen']);
                                    $imagenes[]=$imagen;
                                    $producto->setImagenes($imagenes);
                                }
                                
                            
                             if (($valoracion->getIdValoracion() != $fila['id_valoracion']) && ($producto->id_producto == $fila['productos_id_producto'])){  
                                    
                                    
                                    if ($fila['id_imagen'] % 3 == 0){
                                        
                                $valoracion=new valoracionesModelo();
                                $valoracion->setIdValoracion($fila['id_valoracion']);
                                $valoracion->setIdProducto($fila['productos_id_producto']);
                                $valoracion->setIdUsuario($fila['usuarios_id_usuario']);
                                $valoracion->setNumeroVotaciones($fila['numero_votaciones']);
                                $valoracion->setValorVotacion($fila['valor_votacion']);
                                $valoracion->setFechaValoracion($fila['fecha_valoracion']);
                                $valoracion->setComentario($fila['comentario']);
                               
                                
                                 $valoraciones[]=$valoracion;
                                 $producto->setValoraciones($valoraciones);
                                 
                                    }   
                                
                                }
                                
                            }
                        
                           
                        }
		}catch(PDOException $e){
			
			die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
		}
		
		
		return($productos);
	}
        
        /*---------------------------Buscar productos------------------------------*/
        
        public function buscar($nombre,$categoria,$anio_lanzamiento){
            
            require_once 'modelos/ConectarModelo.php';
            
           
            try{
                $conexion= ConectarModelo::conexion();
                $lista_productos=[];
                 $sql="SELECT * FROM productos  INNER JOIN imagenes ON id_producto=productos_id_producto WHERE"
                        . " nombre_producto LIKE :nombre OR categorias_productos_id_categoria LIKE :categoria OR anio_lanzamiento LIKE :anio";
                $consulta=$conexion->prepare($sql);
                
                $consulta->bindParam(':nombre',$nombre,PDO::PARAM_STR);
                $consulta->bindParam(':categoria',$categoria,PDO::PARAM_STR);
                $consulta->bindParam(':anio',$anio_lanzamiento,PDO::PARAM_STR);
                $consulta->execute();
                $resultado=$consulta->fetchAll();
                
                if(!$resultado){
                    echo '<script type="text/javascript">
				alert("No existe ningún producto con esos criterios de busqueda");
				</script>';
                    $controller=new ProductosControlador();
                    $controller->modificarProducto();
                }else{
                    
                   
                    foreach ($resultado as $fila){
                        
                        if($i == 3){
                            $i=0;
                        }
                        
                $producto=new ProductosModelo();
                $producto->id_producto=$fila['id_producto'];
                $producto->categoria=new CategoriasProductosModelo($fila['categorias_productos_id_categoria']);
                $producto->nombre_producto=$fila['nombre_producto'];
                $producto->nombre_original_producto=$fila['nombre_original_producto'];
                $producto->anio_lanzamiento=$fila['anio_lanzamiento'];
                $producto->director=$fila['director'];
                $producto->reparto=$fila['reparto'];
                $producto->sinopsis=$fila['sinopsis'];
                
                  if ($fila['id_producto'] == $fila['productos_id_producto']){
                $imagen=new ImagenesModelo($fila['nombre_imagen'],$fila['directorio_imagen'],$fila['id_producto']);
                $imagen->setIdImagen($fila['id_imagen']);
                $imagenes[]=$imagen;
                 
                  }
                  if($i == 2){
                      $producto->setImagenes($imagenes);
                      $imagenes=NULL;
                  $lista_productos[]=$producto;
                  }
                   
                   $i++;
                    } 
                }
                $consulta->closeCursor();
            } catch (PDOException $e) {
                
                die("No se pudo conectar con la BBDD ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
            }
            $conexion=null;
            
            return $lista_productos;
        }
	
}
?>