<?php
require 'funciones/conexion.php';
	include 'funciones/funciones.php';


$errors = array();
if(!empty($_POST))
{
		$mysqli=new mysqli("localhost","root","","login"); 
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
 $rol="usuario";

 $query = "INSERT INTO Usuarios (id,nombre,apellido,telefono,direccion,usuario, password,correo,rol)
           VALUES ('$_POST[id]','$_POST[nombre]','$_POST[apellido]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[usuario]', '$hash','$_POST[correo]' , '$rol')";

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


<html>
	<head>
		<title>Registro</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		
	</head>
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel panel-primary ">
					<div class="panel-heading" >
						<div class='panel-heading text-center'>
						<div class="panel-title">REGISTRARSE</div>
						
					</div>  
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							<div class="form-group">
								<label for="id" class="col-md-3 control-label">Id:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="id" placeholder="id" value="<?php if(isset($id)) echo $id; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							<div class="form-group">
								<label for="apellido" class="col-md-3 control-label">Apellido:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="apellido" placeholder="apellido" value="<?php if(isset($apellido)) echo $apellido; ?>" required >
								</div>
							</div>
							<div class="form-group">
								<label for="telefono" class="col-md-3 control-label">Telefono:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?php if(isset($telefono)) echo $telefono; ?>" required >
								</div>
							</div>
							<div class="form-group">
								<label for="direccion" class="col-md-3 control-label">Direccion:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="direccion" placeholder="direccion" value="<?php if(isset($direccion)) echo $direccion; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label for="correo" class="col-md-3 control-label">Correo</label>
								<div class="col-md-9">
									<input type="correo" class="form-control" name="correo" placeholder="correo" value="<?php if(isset($correo)) echo $correo; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Contraseña</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							
							
							
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	