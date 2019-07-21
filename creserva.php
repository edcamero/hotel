<!DOCTYPE html>
<html >
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="
    width=device-width, user-scalable=no, 
    initial-scale=1.0, 
    maximum-scale=1.0,
     minimum-scale=1.0">
    <title> HOTEL AlAMO</title>
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
                <h1><a class="navbar-brand" href="creserva.php"> CLIENTE<p class="logo_w3l_agile_caption"></p></a></h1>
           
           </div>
           <div class=" navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item"><a href="uprincipal.php" class="menu__link scroll">Inicio</a></li>
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
                        <a href="creserva.php"><i class="fa fa-bar-chart-o"></i> Reservar habitacion</a>
                    </li>
                    <li>
                        <a  href="chabitaciones.php"><i class="fa fa-qrcode"></i>Habitaciones</a>
                    </li>
                    
                   


                    
                 </ul>

            </div>

        </nav>
       
       
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">INFORMACION RESERVA</div>
                        <div class="panel-body">
						<form name="form" method="post">
                            
							 
                               <div class="form-group">
                                            <label>Identificacion Cliente</label>
                                            <input type="id" class="form-control" name="id" placeholder="Identificacion Cliente" required>

                                            
                               </div>
                               <div class="form-group">
                                            <label>Fecha de Entrada</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Fecha de Salida</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Id Habitacion</label>
                                            <input type="id_hab" class="form-control" name="id_hab" placeholder="Numero habitación" require>

                                            
                               </div>
                               <div class="span3">
            
                <div class="control-group">
                  <label class="control-label">Adultos</label>
                  <div class="controls">
                    <select class="span1 select_adults" name="adul" required>
                      <option />1 <option />2 <option />3 <option />4 <option />5
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Niños</label>
                  <div class="controls">
                    <select class="span1 select_kids" name="nin">
                      <option />0 <option />1 <option />2 <option />3 <option />4 <option />5
                    </select>
                  </div>
                </div>
              </div>

              <br/>
                               <div class="form-group">
                             <input type="submit" name="add" value="Realizar Reserva" class="btn btn-primary"> 
                             </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                         <div class="panel-body">


                       <div class="form-group">
                                            <label>Total</label>
                                            <input type="total" class="form-control" name="total" placeholder="Total" require>

                                            
                               </div>
                                <div class="form-group">
                                            <label>Descuento</label>
                                            <input type="Descuento" class="form-control" name="Descuento" placeholder="Descuento" require>

                                            
                               </div>
                                <div class="form-group">
                                            <label>Total a Pagar</label>
                                            <input type="totalpagar" class="form-control" name="totalpagar" placeholder="total a Pagar" require>

                                            
                               </div>
                              </div>              
                     </div>
                       
                        
                    </div>
                </div>
				
				
                
            </div>
           
                
                </div>
                    
            
				
					</div>
			
            </div>
      
        </div>
  
    
   
</body>
</html>
