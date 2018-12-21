<?php

class ConectarModelo{
	
	public static function conexion(){
		
		try{
			
			$conexion=new PDO("mysql:host=pdb33.awardspace.net;dbname=2864698_evaluaweb","2864698_evaluaweb","Martinez82");
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$conexion->exec("set names utf8");
		}catch(Exception $e){
				
			die ("Error ".$e->getMessage());
			echo("Linea de error ".$e->getLine());
			
		}
		return($conexion);
		
	}
}


