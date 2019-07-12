<html>
	<?include(ROOT_PATH."head.php") ?>
	
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