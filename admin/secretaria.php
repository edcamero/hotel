<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Secretaria	</title>
    <!-- Bootstrap Styles-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/custom-styles.css" rel="stylesheet" />

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
                 <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                     
            </div>
                <a class="navbar-brand" href="home.php">Secretaria</a>
                 
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

					<li>
                        <a href=""><i class="fa fa-bar-chart-o"></i> Reservar habitacion</a>
                    </li>
                   
                    
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Consultas</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i>Dibujar Pantalla</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Agregar Habitacion</a>
                    </li>
                    
                   


                    
				 </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


               
             </div>
         </div>
                      
			
				

</body>

</html>