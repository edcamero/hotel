<?php

	
	class Conectar{
		



		

		public static function conexion(){
				$bd="hotel2";
				$usuario="root";
				$host="localhost";
				$password="";
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			
			return $mbd = new PDO('mysql:host='.$host.';dbname='.$bd,$usuario, $password);
			
		}

		public static function conexionMySql(){
			$bd="hotel2";
			$usuario="root";
			$host="localhost";
			$password="";
			
			$conexion = new mysqli($host,$usuario,$password,$bd); 
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}

	
	}
	
	
	
?>