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
          
			 <div class="col-md-5 col-sm-5  ">
                    <div class="panel panel-primary">
                  <div class="panel-heading">AGREGAR TIPO HABITACION</div>
                    <div class="panel-heading ">
						 <form name="form" method="post">
                            <div class="form-group">
                             <label> Tipo Habitacion</label>
                                            
                                    <input type="id_tipo" class="form-control" name="id_tipo" placeholder="Tipo Habitacion" required>
                              
                            </div>
							  
							 <input type="submit" name="add" value="Agregar" class="btn btn-primary"> 
						</form>

							
                   </div>
                        
                    </div>

          

                </div>

                <!--/mostrar tabla-->   
                <div id="fon">

                     <div class=" col-md-5 col-sm-5 ">    
                <div class="panel panel-primary">
                 <div class="  panel-heading"> TIPO HABITACION</div>

                <?php require_once("listartipohab.php");
                ?>
                </div>
               </div>
               </div>  
                 <!--/fin tabla-->     

            </div>
              <!--/ fin contenido-->     
       
         
        </body>
</html>
