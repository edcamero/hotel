<?php 
require_once(DB."/conexion.php");
//require_once(MODELS . $controller . '.php');

class SesionController
{	
    public function __construct(){}
    
     public function login()
     {
        
      
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
                            session_start();
                            $_SESSION['loggedin'] = true;
                            $_SESSION['usuario'] = $usuario;
                            $_SESSION['start'] = time();
                            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
                            $userdb = $result->fetch_assoc();
                            $_SESSION['id']=$userdb['id'];
                             
                            header('Location:'.URL_PATH.'uprincipal.php');

                        }else { 
                            
                            echo "Username o Password estan incorrectos.";
                            echo "<br><a href='login.html'>Volver a Intentarlo</a>";
                        }
                    }else
                    {
                        require_once(VIEW."sesion/login.php");
                    }
 
    }

    public function logout(){
        session_start();
        unset ($_SESSION['username']);
        session_destroy();
        header("location: index.php");
    }
        

}