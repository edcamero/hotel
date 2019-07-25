<?php

if(isset($action)){
    if($action=='index'){

        ?>
        <div id="page-wrapper"  class="container ">
                <div id="page-inner " class="container row justify-content-center">
                
                    <div class="row justify-content-center">
                    
                        <div class="col col-md-8 col-sm-8 row justify-content-center">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                Modificar Precio Tipo Habitacion

                            </div>
                                
                            <div class="panel-body">
                                <form name="form" method="post" action="<?php echo URL_PATH."admin/index.php?controller=tipohabitacion&action=agregar";?>">
                                <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="precio_hab" class="form-control" name="nombre_hab" placeholder="Nombre habitacion" required>

                                    </div>
                    
                                    <div class="form-group">
                                            <label>Nuevo Precio</label>
                                            <input type="precio_hab" class="form-control" name="precio_hab" placeholder="precio habitación" required>

                                    </div>
                                    <input type="submit" name="add" value="Agregar" class="btn btn-primary"> 
                                </form>
                
                            </div>
                                <!--/mostrar tabla-->   
                            <div id="container">
                                <div class="row">
                                <div class=" col-md-12 col-sm-12 ">    
                                    <div class="panel panel-primary">
                                            <div class="  panel-heading"> TIPO HABITACION</div>

                                    <?php require_once("listartipohab.php");
                                    ?>
                                    </div>
                                    </div>
                                </div>
                            </div>  
                            <!--/fin tabla-->   
                                
                        </div>
                    </div>
                </div>
    </div>

<?php
     }

    if($action=="ver") {
        
        ?>
    <div id="page-wrapper"  class="container ">
                <div id="page-inner " class="container row justify-content-center">
                
                <?php 
               $tipoH=Tipo_habitacion::buscarId($_GET['id']);?>
                    <div class="row justify-content-center">
                    
                        <div class="col col-md-8 col-sm-8 row justify-content-center">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                Informacion de  Tipo Habitacion  <?php echo $tipoH->nombre_tipo;?>

                            </div>
                                
                            <div class="panel-body">
                                <form name="form" method="post" action="<?php echo URL_PATH."admin/index.php?controller=tipohabitacion&action=agregar";?>">
                                <div class="form-group">
                                            <label>ID:</label>
                                            <label><?php echo $tipoH->id;?></label>
                                    </div>
                    
                                    <div class="form-group ">
                                            <label for="">Precio:</label>
                                            <label><?php echo $tipoH->precio;?></label>
                                            

                                    </div>
                                    <input type="submit" name="add" value="Agregar Imagen" class="btn btn-primary"> 
                                </form>
                
                            </div>
                                <!--/mostrar tabla-->   
                            <div id="container">
                                <div class="row">
                                <div class=" col-md-12 col-sm-12 ">    
                                    <div class="panel panel-primary">
                                            <div class="  panel-heading"> Imagenes</div>

                                    <?php require_once(ADMIN."listaimg.php");
                                    ?>
                                    </div>
                                    </div>
                                </div>
                            </div>  
                            <!--/fin tabla-->   
                                
                        </div>
                    </div>
                </div>
    </div>



    <?php   # code...
    }
}

            
             
