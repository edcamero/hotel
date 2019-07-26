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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>       
        
         
        </body>
</html>
