<?php 


	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	require_once("rutas.php");
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		
		$action=$_GET['action'];

		
	} else 
	{
		
		session_start();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ) {
			
			if(isset($_SESSION['rol'])==1){
				header("location:admin");
			}else{
				require_once(VIEW.'cliente/index.php');
			}
			
		}else{
			header("location:uprincipal.php?controller=sesion&action=login");
		}

	}	
	require_once("controlador.php");
	
	


?>