<?php
	
	class Conectar{

		public static function conexion(){
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			return $mbd = new PDO('mysql:host=localhost;dbname=bd_hotel', "root", "");
			
		}

	
	}
	
	
	
?>