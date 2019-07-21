<?php
	
	class Conectar{
		static $baseDatos="bd_hotel";
		

		public static function conexion(){
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			
			return $mbd = new PDO('mysql:host=localhost;dbname=bd_hotel', "root", "");
			
		}

		public static function conexionMySql(){
			$baseDatos="bd_hotel";
			$conexion = new mysqli("localhost","root","",$baseDatos); 
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}

	
	}
	
	
	
?>