<?php
	
	class Conectar{
		public $baseDatos="u535867201_hotel ";
		public $usuario="u535867201_root";
		static $host="server184.hostinger.co";
		static $password="123456";


		

		public static function conexion(){
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			
			return $mbd = new PDO('mysql:host=.$host;dbname=.$baseDatos',$usuario, $password);
			
		}

		public static function conexionMySql(){
			$baseDatos="nnn";
			$conexion = new mysqli($host,$usuario,$password,$baseDatos); 
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}

	
	}
	
	
	
?>