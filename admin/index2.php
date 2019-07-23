 <?php 
 require_once("../rutas.php");
 ?>
 <!DOCTYPE html>
<html >
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="
    width=device-width, user-scalable=no, 
    initial-scale=1.0, 
    maximum-scale=1.0,
     minimum-scale=1.0">
    <title> HOTEL ALAMO</title>
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
                <h1><a class="navbar-brand" href="admin.php"> ADMINISTRADOR<p class="logo_w3l_agile_caption"></p></a></h1>
           
           </div>
           <div class=" navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item"><a href=<?php echo URL_PATH."uprincipal.php"?> class="menu__link scroll">Inicio</a></li>
                           <li class="menu__item"><a href=<?php echo URL_PATH."uprincipal.php?controller=sesion&action=logout"?> class="menu__link scroll">Cerrar Sesion</a></li>
                        </ul>
                    </nav>
                </div>
        </nav>
        <!--/Navegador  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    
                    <li>
                        <a  href="adhab.php"><i class="fa fa-qrcode"></i> Añadir Habitacion</a>
                    </li>
                    
                    <li>
                        <a  href=""><i class="fa fa-qrcode"></i> Gestionar Habitaciones</a>

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
   
				

</body>

</html>