<?php

	
	class Conectar{
		



		

		public static function conexion(){
				$bd="u535867201_hotel";
				$usuario="u535867201_root";
				$host="server184.hostinger.co";
				$password="123456";
			//$conexion=new mysqli("localhost", "root", "", "bd_hotel");
			//$conexion->query("SET NAMES 'utf8'");
			
			
			return $mbd = new PDO('mysql:host=.$host;dbname=.$bd',$usuario, $password);
			
		}

		public static function conexionMySql(){
			$bd="u535867201_hotel";
			$usuario="u535867201_root";
			$host="sql184.main-hosting.eu";
			$password="123456";
			
			$conexion = new mysqli($host,$usuario,$password,$bd); 
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}

	
	}
	
	
	
?>