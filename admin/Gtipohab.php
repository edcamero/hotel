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
     <link href="css/styl.css" rel="stylesheet" />
  
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

    <div class="container col-xs-3 col-sd-3 col-md-3 col-lg-3">
    <section class="row">
      <article >
         <?php require_once("listartipohab.php");?>

      </article>

    </section>

  </div>
</div>


            </div>
              <!--/ fin contenido-->     
       
         
        </body>
</html>
