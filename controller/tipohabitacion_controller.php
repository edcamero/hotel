<?php 
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');
echo MODELS . $controller . '.php';

class TipohabitacionController
{	
    public function __construct(){}
    
        public function index()
        {   

            
            $GLOBALS['cuerpo']=ADMIN."Ghab.php";
           // echo "hola controlador";

        } 
        
        public function agregar(){
            
            $GLOBALS['cuerpo']=ADMIN."Ghab.php";
            $tipo=new Tipo_habitacion($_POST['nombre_hab'],$_POST['precio_hab']);
            Tipo_habitacion::agregar($tipo);

        }


        public function ver(){
            $tipoH=Tipo_habitacion::buscarId($_GET['id']);
            $this::index();

        }
 }