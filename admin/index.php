<?php
require_once("../rutas.php");
$GLOBALS['cuerpo']="Ghab.php";
if(!isset($_SESSION)) {
    session_start();
  }

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ) {
			
			if($_SESSION['rol']==3){
				header("location:".URL_PATH."uprincipal.php");
			}
			if($_SESSION['rol']==2){
				header("location:".URL_PATH."sec.php.php");
			}
			

			
			if($_SESSION['rol']==1){
               
                if (isset($_GET['controller'])&&isset($_GET['action'])) {
					$controller=$_GET['controller'];
					
					$action=$_GET['action'];
			
					
				} 
                require_once(ROOT_PATH."controlador.php");
                
                require_once("admin.php");

                //require_once(ROOT_PATH."controlador.php");
				//header("location:admin/index.php?controller=sesion&action=login");
				//require_once(ADMIN.'index.php');
			}
				
				
			
			
		}else{
            
			header("location:".URL_PATH."uprincipal.php?controller=sesion&action=login");
        }
        
