<?php 
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	require_once("rutas.php");
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		
		$action=$_GET['action'];

		
	} else {
		header('login.php');
	}	
	require_once("controlador.php");
	
	

session_start();
 //require('connect.php');
?>