<?php 

	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		
		$action=$_GET['action'];
	} else {
		header('login.php');
	}	
	require_once('rutas.php');
	

session_start();
 //require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ALAMO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="
	width=device-width, user-scalable=no, 
	initial-scale=1.0, 
	maximum-scale=1.0,
	 minimum-scale=1.0">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"  />
	<link href="css/styl.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
<!-- navegador -->
<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Palanca de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="uprincipal.php"> HOTEL <span>ALAMO</span><p class="logo_w3l_agile_caption"><CENTER>&#9733;&#9733;&#9733;&#9733;&#9733;</CENTER></p></a></h1>
				</div>
				
			     <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="uprincipal.php" class="menu__link scroll">Inicio</a></li>
							<li class="menu__item"><a href="habitaciones.php" class="menu__link scroll">Habitaciones</a></li>
							<li class="menu__item"><a href="creserva.php" class="menu__link scroll">Reservar</a></li>
							<li class="menu__item"><a href="logout.php" class="menu__link scroll">cerrar sesion</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- imagen fondo -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL ALAMO</h4>
									<h3>ELECTIVA PROFESIONAL</h3>
										<p>UNIVERSIDAD DE PAMPLONA</p>
								
								</div>	
							</div>
						</div>
				</li>
					
					
			</ul>
		</div>
			
	</div>	
								

</body>
</html>