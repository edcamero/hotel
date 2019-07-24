 
<!DOCTYPE html>
<html lang="es">

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
                <h1><a class="navbar-brand" href="index.php"> ADMIN<p class="logo_w3l_agile_caption"></p></a></h1>
           
           </div>
           <div class=" navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                                <li class="menu__item"><a href="index.php" class="menu__link scroll">Inicio</a></li>
                            <li class="menu__item"><a href="" class="menu__link scroll">Cerrar Sesion</a></li>
                          
                        </ul>
                    </nav>
                </div>
        </nav>
        <!--/Navegador  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                   
          <li>
             <a  href="Ghab.php"><i class="fa fa-qrcode"></i> Gestionar Habitaciones</a>

         </li>
           <li>
             <a  href="Gdes.php"><i class="fa fa-qrcode"></i> Gestionar Descuento</a>
         </li>
         <li>
             <a  href="Ggan.php"><i class="fa fa-qrcode"></i> Calcular Ganancias</a>
         </li>
         <li>
             <a  href="Gtipohab.php"><i class="fa fa-qrcode"></i> Agregar Tipo de Habitaciones</a>
         </li>
          <li>
             <a  href="Gtipocli.php"><i class="fa fa-qrcode"></i> Agregar Nuevo cliente</a>
         </li>
             
                   


                    
                 </ul>

            </div>

        </nav>
       
        
       
        <div id="page-wrapper" >
          
			 <div class="col-md-5 col-sm-5  ">
                    <div class="panel panel-primary">
                  <div class="panel-heading">AGREGAR TIPO CLIENTE</div>
                    <div class="panel-body">
						 <form name="form" method="post">
                            <div class="form-group">
                             <label> Tipo Cliente</label>
                                            
                                    <input type="id_tipoc" class="form-control" name="id_tipoc" placeholder="Tipo Cliente" required>
                              
                            </div>
							  
							 <input type="submit" name="add" value="Agregar" class="btn btn-primary"> 
						</form>
							
                   
                        
                    </div>

               
                
                  
          
                    
                       
                            
							  
							 
							 
							  
							  
							   
                 </div>
                 <div class="box-content">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                        <tr>
                                             <th>Id</th>
                                           <th>Tipo Cliente</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="listatcliente">
                                        
                                    </tbody>
                                </table>
                            </div>

                        
             </div>
          </div>
                
        
            </div>
                    
            
				
					</div>

			 
   </div>
         
</div>

   
</body>
</html>