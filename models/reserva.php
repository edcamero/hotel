<?php 
class Reserva{
        public $id;
        public $fecha_entrada;
        public $fecha_salida;
        public $total;
        public $descuento;
        public $subtotal;
        public $cliente_id;
        public $empleado;


    function __construct($fecha_entrada,$fecha_salida,$total,$descuento,$subtotal,$cliente_id,$empleado){
        
        $this->fecha_entrada=$fecha_entrada;
        $this->fecha_salida=$fecha_salida;
        $this->total=$total;
        $this->descuento=$descuento;
        $this->subtotal=$subtotal;
        $this->cliente_id=$cliente_id;
        $this->empleado=$empleado;



    }

    public static function ultimoID(){
		//buscar
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT MAX(id) AS id FROM reserva');
		
		$select->execute();
		//asignarlo al objeto usuario
		$consulta=$select->fetch();
        $id=$consulta['id'];
        return $id;
	}


    public static function agregar(Reserva $reser){
        
        
        $db=Conectar::conexion();
        try { 
            $insert=$db->prepare('INSERT INTO reserva VALUES(null,:fecha_entrada,:fecha_salida ,:total,:descuento,:subtotal,:cliente_id,:empleado_id)');
        //$insert->bindValue('id',$reser->id);
        echo $reser->fecha_entrada;
        $insert->bindValue('fecha_entrada',$reser->fecha_entrada);
        $insert->bindValue('fecha_salida',$reser->fecha_salida);
        $insert->bindValue('total',$reser->total);
        $insert->bindValue('descuento',$reser->descuento);
        $insert->bindValue('subtotal',$reser->subtotal);
        $insert->bindValue('cliente_id',$reser->cliente_id);
        $insert->bindValue('empleado_id',$reser->empleado);

        
        $insert->execute();
         }catch(Exception $e) {
        
            echo "Fallo: " . $e->getMessage();
          }

    }



    public static function agregarHab($idhab){


        $reservaID=Reserva::ultimoID();
        $db=Conectar::conexion();
        try { 
            $insert=$db->prepare('INSERT INTO hab_reserva VALUES(null,:habitacion_id,:reserva_id )');
        //$insert->bindValue('id',$reser->id);
        $insert->bindValue('habitacion_id',$idhab);
        $insert->bindValue('reserva_id',$reservaID);
        

        
        $insert->execute();
         }
catch
        (Exception $e) {
        
            echo "Fallo: " . $e->getMessage();
          }

    }


}