<?php
	
	class Conectar{
		static $baseDatos="nnn";
		

		public static function conexion(){
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			
			return $mbd = new PDO('mysql:host=localhost;dbname=nnn', "root", "");
			
		}

		public static function conexionMySql(){
			$baseDatos="nnn";
			$conexion = new mysqli("localhost","root","",$baseDatos); 
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}

	
	}
	
	
	
?>