
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
                    <span class="sr-only">Navegación de palanca</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Reservar Habitacion </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    
                   
                </li>
              
            </ul>
        </nav>
       
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
<li>
                        <a href="">reserva.php<i class="fa fa-bar-chart-o"></i> Reservar habitacion</a>
                    </li>
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
                                            <label>Nombre Cliente</label>
                                            <input type="nombre" class="form-control" name="id_hab" placeholder="Nombre Cliente" required>

                                            
                               </div>
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
