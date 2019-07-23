<?php 
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');

class HabitacionController
{   
    public function __construct(){}

    public function index(){
        echo 'index desde HabitacionController';
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