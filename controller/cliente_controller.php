<?php 
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');
include 'funciones/funciones.php';
class ClienteController{	
	public $errors=array(1    => "",);
    public function registrarIndividual(){
        if(!empty($_POST))
{
		//$mysqli=Conectar::conexionMySql(); 
		$tipo_docu_id = $_POST['tipo_docu_id'];
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$direccion= $_POST['direccion'];
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$con_password = $_POST['con_password'];
		$correo = $_POST['correo'];
/* usuario validacion duplicado */ 

 
      if(isNull($id,$nombre,$apellido,$telefono,$direccion, $usuario, $correo,$password, $con_password))
		{
			$this->errors[] = "Debe llenar todos los campos";
			$aviso= "Dirección de correo inválida";
			print "<script>alert('$aviso')</script>";
		}

     if(!isEmail($correo))
		{
			$this->$errors[] = "Dirección de correo inválida";
			$aviso= "Dirección de correo inválida";
			print "<script>alert('$aviso')</script>";
		}		
		
		
     if(!validaPassword($password, $con_password))
		{
			$this->errors[] = "Las contraseñas no coinciden";
			$aviso= "Las contraseñas no coinciden";
			print "<script>alert('$aviso')</script>";
		}		
		
       /* if(usuarioExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
			$aviso= "El nombre de usuario $usuario ya existe";
			print "<script>alert('$aviso')</script>";
		}*/
		
     if(emailExiste($correo))
		{

			$this->errors[] = "El correo electronico $correo ya existe";
			$aviso=  "El correo electronico correo ya existe";
			print "<script>alert('$aviso')</script>";
		
		}

		

        if(count($this->errors) <2){


       echo "sin errores";
        
        $password= md5($password);
        $rol=1;
		$tipo_cliente=1;
		//($cedula, $nombres, $apellidos, $direccion,$correo,$tipo_docu_id,$tipo_cliente,$id_usuario,$nombre_user,$password,$rol);
		$cliente_nuevo=new Cliente($id,$nombre,$apellido,$direccion,$correo,$tipo_docu_id,$tipo_cliente,$id,$usuario,$password,$rol);
		//echo $cliente_nuevo->usuario->password;
		echo $rol;
		Cliente::agregar($cliente_nuevo);
		//echo $cliente_nuevo->id;
		$mensaje='Cliente Agregado con exito';
		
		

    		}
		}

	}
}