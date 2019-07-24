  <?php 
 require_once("../rutas.php");
 ?>
 <!DOCTYPE html>
<html >
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, user-scalable=no,  initial-scale=1.0,  maximum-scale=1.0,  minimum-scale=1.0">
    <title> HOTEL ALAMO</title>
      <link href="css/bootstrap.css" rel="stylesheet" />
   
      <link href="css/font-awesome.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet" />
  
    <link href="css/admin-styles.css" rel="stylesheet" />
   
</head>
<body>
    <div id="wrapper">
        <!--/Navegador  horizontal-->
        <?php require_once("menu.php");?>
        
        <!--/Navegador vertical -->
       <?php require_once("menu-vertical.php");?>
    </div>
       
   <!--/contenido-->     
       
        <div id="page-wrapper" >
          
	<!--/mostrar tabla-->   
                <div id="fon">

                     <div class=" col-md-7 col-sm-7 ">    
                <div class="panel panel-primary">
                 <div class="  panel-heading"> Cliente</div>

                <?php require_once("listacliente.php");
                ?>
                </div>
               </div>
               </div>  
                 <!--/fin tabla-->     

            </div>
              <!--/ fin contenido-->     
       
         
        </body>
</html>
