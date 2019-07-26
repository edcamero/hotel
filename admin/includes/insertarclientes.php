

<?php

	include 'funciones/funciones.php';
 
	


$errors = array();
if(!empty($_POST))
{
		$mysqli=new mysqli("localhost","root","","bdhotel");
        $tipo_docu_id = $mysqli->real_escape_string($_POST['tipo_docu_id']);  
		$id = $mysqli->real_escape_string($_POST['id']);
		$nombres = $mysqli->real_escape_string($_POST['nombres']);
		$apellidos = $mysqli->real_escape_string($_POST['apellidos']);
		$telefono = $mysqli->real_escape_string($_POST['telefono']);
		$direccion= $mysqli->real_escape_string($_POST['direccion']);
		$nombre_user = $mysqli->real_escape_string($_POST['nombre_user']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$con_password = $mysqli->real_escape_string($_POST['con_password']);
		$correo = $mysqli->real_escape_string($_POST['correo']);
/* usuario validacion duplicado */ 

 
      if(isNull($id,$nombres,$apellidos,$telefono,$direccion, $nombre_user, $correo,$password, $con_password))
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
		
        if(usuarioExiste($nombre_user))
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

 $query1 = "INSERT INTO usuario (id,nombres,apellidos,telefono,direccion,usuario, password,correo,rol)
           VALUES ('$_POST[id]','$_POST[nombres]','$_POST[apellidos]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[nombre_user]', '$hash','$_POST[correo]' , )";


$query = "INSERT INTO persona (id,nombres,apellidos, direccion, correo, tipo_docu_id)
           VALUES ('$_POST[id]','$_POST[nombres]','$_POST[apellidos]', '$_POST[direccion]','$_POST[correo]' )";
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