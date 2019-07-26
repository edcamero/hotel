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


        public function agregarImagen(){
            
            
            
            
            //$tipo=new Tipo_habitacion::buscarId('3');
            $nombre_img = $_FILES['imagen']['name'];
            $tipo = $_FILES['imagen']['type'];
            $tamano = $_FILES['imagen']['size'];
            if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] < 200000)){



                if (($_FILES["imagen"]["type"] == "image/gif")
                        || ($_FILES["imagen"]["type"] == "image/jpeg")
                        || ($_FILES["imagen"]["type"] == "image/jpg")
                        || ($_FILES["imagen"]["type"] == "image/png"))
            {
                $directorio = IMG.'tipohab/';
                //echo "<br>";
                //echo $directorio;
                move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);

               $tipo= Tipo_habitacion::buscarId($_GET['id']);
               $foto=new Imagen($tipo->id,$_POST['nombre'],'','images/tipohab/'.$nombre_img);
              // $tipo::agregarImagen($foto);
                Imagen::agregar($foto);

            }else{
                echo "No se puede subir una imagen con ese formato ";
            }
            $GLOBALS['cuerpo']=ADMIN."Ghab.php";

        }else{
            if($nombre_img == !NULL) {
                echo "La imagen es demasiado grande ";
            }
        }

    }
        public function ver(){
            $GLOBALS['tipoHab']=Tipo_habitacion::buscarId($_GET['id']);
            $this::index();

        }


        public function buscarTipo(){
            return Tipo_habitacion::buscarId($_GET['id']);
        }
 }