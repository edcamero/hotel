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
        require 'rutas.php';
        require  DB.'conexion.php';
        //require 'funciones/conexion.php';
            include 'funciones/funciones.php';
                if(!empty($_POST))
                    {
                        
                        $conexion=Conectar::conexionMySql();
                        $usuario = $conexion->real_escape_string($_POST['usuario']);
                        $password = $conexion->real_escape_string($_POST['password']);

                        if ($conexion->connect_error) {
                            die("La conexion falló: " . $conexion->connect_error);
                        }

                        $usuario = $usuario;

                        $password = md5($password);

                    
                        $sql = "SELECT * FROM usuario WHERE nombre_user = '$usuario' and password='$password'";


                        $result = $conexion->query($sql);

                        $u=mysqli_affected_rows($conexion);//si el usuario digito bien el usuario y contraseña $u da el numero 1 y entra de lo contrario da el numero cero

                        if ($u>0) {   
                                
                            $_SESSION['loggedin'] = true;
                            $_SESSION['usuario'] = $usuario;
                            $_SESSION['start'] = time();
                            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
                                
                            echo "Bienvenido! " . $_SESSION['usuario'];
                            echo "<br><br><a href=uprincipal.php>Panel de Control</a>"; 

                        }else { 
                            
                            echo "Username o Password estan incorrectos.";
                            echo "<br><a href='login.html'>Volver a Intentarlo</a>";
                        }
                    }else
                    {
                        echo 'llame al login';
                    }
 
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