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
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 
                 <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         Modificar Precio Tipo Habitacion

                        </div>
                        
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label> Tipo de habitación</label>
                                            <select name="tipo"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Simple">Simple</option>
                                                <option value="Doble">Doble</option>
												<option value="Matrimonial">Matrimonial</option>
												
                                            </select>
                              </div>
							  
								<div class="form-group">
                                            <label>Nuevo Precio</label>
                                            <input type="precio_hab" class="form-control" name="precio_hab" placeholder="precio habitación" required>

                                            
                               </div>
							 <input type="submit" name="add" value="Agregar" class="btn btn-primary"> 
							</form>
							
                        </div>
                        <!--/mostrar tabla-->   
                <div id="fon">

                     <div class=" col-md-5 col-sm-5 ">    
                <div class="panel panel-primary">
                 <div class="  panel-heading"> TIPO HABITACION</div>

                <?php require_once("listausuario.php");
                ?>
                </div>
               </div>
               </div>  
                 <!--/fin tabla-->   
                        
                    </div>
                </div>
              </div>
            </div>
            
          </div>
          <
                
                  
            
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
				
					</div>
			
            </div>
        
        </div>
  

    
   
</body>
</html>
