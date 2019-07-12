<?php
include_once (dirname( __FILE__ ).'/rutas.php');
require_once (DB."/conexion.php");
include_once (FUNCIONES.'funciones.php');




$errors = array();
if(!empty($_POST))
{
		$mysqli=Conectar::conexion(); 
		$id = $mysqli->real_escape_string($_POST['id']);
		$nombre = $mysqli->real_escape_string($_POST['nombre']);
		$apellido = $mysqli->real_escape_string($_POST['apellido']);
		$telefono = $mysqli->real_escape_string($_POST['telefono']);
		$direccion= $mysqli->real_escape_string($_POST['direccion']);
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$con_password = $mysqli->real_escape_string($_POST['con_password']);
		$correo = $mysqli->real_escape_string($_POST['correo']);
/* usuario validacion duplicado */ 

 
      if(isNull($id,$nombre,$apellido,$telefono,$direccion, $usuario, $correo,$password, $con_password))
		{
			$errors[] = "Debe llenar todos los campos";
			$aviso= "Debe llenar todos los campos";
			print "<script>alert('$aviso')</script>";
		}

     if(!isEmail($correo))
		{
			$errors[] = "Dirección de correo inválida";
			$aviso= "Dirección de correo inválida";
			echo "<script type='text/javascript'>alert(\"$aviso\");</script>";
		}		
		
		
     if(!validaPassword($password, $con_password))
		{
			$errors[] = "Las contraseñas no coinciden";
			$aviso= "Las contraseñas no coinciden";
			print "<script>alert('$aviso')</script>";
		}		
		
        if(usuarioExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
			$aviso= "El nombre de usuario $usuario ya existe";
			print "<script>alert('$aviso')</script>";
		}
		if(idexiste($id))
		{
			$errors[] = "El  $id ya existe";
			$aviso= "El  $id ya existe";
			print "<script>alert('$aviso')</script>";
		}
		
     if(emailExiste($correo))
		{

			$errors[] = "El correo electronico $correo ya existe";
			$aviso=  "El correo electronico correo ya existe";
			print "<script>alert('$aviso')</script>";
		
		}



    if(count($errors) == 0){


 $form_pass = $_POST['password'];
 
 $hash = md5($form_pass);
 $id_tipo=2;

 $query1 = "INSERT INTO usuario (id,nombre,apellido,telefono,direccion,usuario, password,correo,rol)
           VALUES ('$_POST[id]','$_POST[nombre]','$_POST[apellido]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[usuario]', '$hash','$_POST[correo]' , '$id_tipo')";


$query = "INSERT INTO persona (id,nombres,apellidos, direccion, correo, tipo_docu_id)
           VALUES ('$_POST[id]','$_POST[nombre]','$_POST[apellido]', '$_POST[direccion]','$_POST[correo]' ,$id_tipo)";
 if ($mysqli->query($query) === TRUE) {
 

  echo'<script type="text/javascript">
alert("USUARIO CREADO CON EXITO");
window.location.href="index.php";
</script>';

 }

 else {
 echo'<script type="text/javascript">
alert("Vuelva a Introducir los datos");
window.location.href="registro.php";
</script>';
   }
 
}
}

?>


