<?php
require_once(DB."/conexion.php");
require_once(MODELS . $controller . '.php');



class ReservaController{



    function __construct(){

    }


    public function agregar(){
        
        $fechaEn=$_POST['fechain'];
        $fechaSa=$_POST['fechaout'];
        $total=$_POST['totalpagar'];
        $subtotal=$_POST['subtotal'];
        $descuento=$_POST['descuento'];
        $id_cliente=$_POST['id'];
        $id_empleado=333333;
        $id_hab=$_POST['id_hab'];
        
        $myReserva=new Reserva($fechaEn,$fechaSa,$total,$descuento,$subtotal,$id_cliente,$id_empleado);
        Reserva::agregar($myReserva);
        
        Reserva::agregarHab($id_hab);

        require_once(ROOT_PATH."creserva.php");

        
        
    }
}