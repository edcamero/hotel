<?php 
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');

class UsuarioController
{	
    public function __construct(){}

    public function index(){
        echo 'index desde UsuarioController';
    }

    public function login(){
        
        header('Location:'.URL_PATH.'login.php');
       // header('login.php');
    }

    
    public function register(){
       // $p=new Persona(1092343938,'Enyerson Darwin','Camero Correa','k-4-A sta clara','blade_liger13@hotmail.com',1);
       // $p->agregar($p);
        echo 'register desde UsuarioConroller';
    }

    public function update(){
        echo 'update desde UsuarioConroller';

    }

    public function delete(){
        echo 'delete desde UsuarioConroller';
    }
    
    public function error(){
            echo 'error';
       // require_once('Views/Usuario/error.php');
    } 
}