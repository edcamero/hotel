﻿ 
<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="
    width=device-width, user-scalable=no, 
    initial-scale=1.0, 
    maximum-scale=1.0,
     minimum-scale=1.0">
   

    <title>Administrator</title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
   
      <link href="css/font-awesome.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet" />
  
    <link href="css/admin-styles.css" rel="stylesheet" />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegación de palanca
</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1"> </div>
                <a class="navbar-brand" href="admin.php">ADMINISTRADOR</a>
                 
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                   
                </li>
              
            </ul>
        </nav>
        <!--/Navegador  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

					<li>
                        <a href="reserva.php"><i class="fa fa-bar-chart-o"></i> Reservar habitacion</a>
                    </li>
                    <li>
                        <a  href="adhab.php"><i class="fa fa-qrcode"></i> Añadir Habitacion</a>
                    </li>
                    
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Gestionar Habitaciones</a>
                <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Gestionar Descuento</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Calcular Ganancias</a>
                    </li>
                    <li>
                        <a  href="adtipohab.php"><i class="fa fa-qrcode"></i> Agregar Tipo de Habitaciones</a>
                    </li>
                    
                   


                    
				 </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


               
             </div>
         </div>
                      
	 <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>		
				

</body>

</html>