<?php 
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');
require_once(MODELS . 'tipohabitacion.php');
require_once(MODELS . 'imagen.php');

class HabitacionController
{   
    public function __construct(){}

    public function index(){
       // $habitaciones=Habitacion::listar();
        $tipos=Tipo_habitacion::listar();
        require_once(VIEW.'habitacion/index.php');
       


    }


    
    public function register(){
     
        echo 'register desde HabitacionConroller';
    }

    public function update(){
        echo 'update desde HabitacionConroller';

    }

    public function delete(){
        echo 'delete desde  HabitacionConroller';
    }
    
    public function error(){
            echo 'error';
      
    } 
}