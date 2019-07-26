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
       
 
     <div id="page-wrapper"  class="container ">
                <div id="page-inner " class="container row justify-content-center">
                
               
                    <div class="row justify-content-center">
                    
                        <div class="col col-md-8 col-sm-8 row justify-content-center">
                            <div class="panel panel-primary">
                                <div class="panel">
                              <STRONG> USUARIOS</STRONG>

                
                                <!--/mostrar tabla-->   
                            <div id="container">
                                <div class="row">
                                <div class=" col-md-12 col-sm-12 ">    
                                    <div class="panel">
                                       <?php require_once("listausuario.php");?>
                                   
                                    </div>
                                    </div>
                                </div>
                            </div>  
                            <!--/fin tabla-->   
                                
                        </div>
                    </div>
                </div>
    </div>


      

            
              <!--/ fin contenido--> 
         
        </body>
</html>
