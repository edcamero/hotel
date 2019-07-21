

<?php
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

$usuario = $_POST['usuario'];

$password = md5($_POST['password']);

echo $password;

$sql = "SELECT * FROM usuario WHERE nombre_user = '$usuario' and password='$password'";


$result = $conexion->query($sql);

 $u=mysqli_affected_rows($conexion);//si el usuario digito bien el usuario y contraseña $u da el numero 1 y entra de lo contrario da el numero cero

if ($u>0) {   
		
		$_SESSION['loggedin'] = true;
	    $_SESSION['usuario'] = $usuario;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
		
    echo "Bienvenido! " . $_SESSION['usuario'];
    echo "<br><br><a href=uprincipal.php>Panel de Control</a>"; 

  
 }else { 
	 
   echo "Username o Password estan incorrectos.";
   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
}
 ?>
<html>
	<head>
		<title>Login</title>
		
		<link href="css/bootstrap.css" rel="stylesheet" />
   
      <link href="css/font-awesome.css" rel="stylesheet" />
     <link href="css/styl.css" rel="stylesheet" />
  
    <link href="css/admin-styles.css" rel="stylesheet" />
		
	</head>
	
	<body class="w3layouts-banner-top">
		
		<div class="container "  >    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<label for="usuario" class="control-label">Usuario</label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<label for="password" class=" control-label">Password</label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>				