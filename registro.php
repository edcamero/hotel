<?php
require 'rutas.php';
require  DB.'conexion.php';
//require 'funciones/conexion.php';
include 'funciones/funciones.php';

	$errors = array();



?>


<html>
	<head>
		<title>Registro</title>
		 <link href="css/bootstrap.css" rel="stylesheet" />
   
      <link href="css/font-awesome.css" rel="stylesheet" />
     <link href="css/styl.css" rel="stylesheet" />
  
    <link href="css/admin-styles.css" rel="stylesheet" />

	</head>
	
	<body class="w3layouts-banner-top">
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="uprincipal.php?controller=cliente&action=registrarIndividual" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							<div class="form-group ">
                                            <label for="tipo_docu_id" class="col-md-3 control-label">Tipo de Documento</label>
                                            <div  class="col-md-9">
                                            <select name="tipo_docu_id" class="form-control " required >
												<option value selected ></option>
                                                <option value="1">CC</option>
                                                <option value="2">TI</option>
                                                <option value="3">Pasaporte</option>
                                                
                                            </select>
                                            </div>
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
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							
							
							
							
							<div class="form-group ">                                      
								<div class="col-md-offset-3 col-md-9">
                             <input type="submit" name="Registro" value="REGISTRAR" class="btn btn-primary"> 
                             </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	