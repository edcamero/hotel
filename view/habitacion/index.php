
<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ALAMO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="
	width=device-width, user-scalable=no, 
	initial-scale=1.0, 
	maximum-scale=1.0,
	 minimum-scale=1.0">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"  />
	<link href="css/styl.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
<!-- navegador -->
<?php 
require_once("rutas.php");
require_once(VIEW."menu.php");?>
<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Habitaciones</h3>
						<div class="priceing-table-main">
						
        
        
    
						<?php foreach($tipos as $tipo){ ?>
							<div class="col-md-4 price-grid">
								<div class="price-block agile">
										<div class="price-gd-top">
										
										<img src="<?php Imagen::muestra($tipo->id);?>" alt=" " class="img-responsive" />
											<h4><?php echo $tipo->nombre_tipo?></h4>
										</div>
										<div class="price-gd-bottom">
											<div class="price-list">
													<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
													
													</ul>
												</div>
												<div class="price-selet">	
																		
													<a href="creserva.php" >	Reservar ahora</a>
												</div>
										</div>
								</div>
							</div>
							<?php } ?>
						
				
				
				<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>

								
  </body>
</html>


