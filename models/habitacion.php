<?php

require_once(MODELS.'tipohabitacion.php');

class Habitacion{
    public $id;
    public $tipo_habi;


    function __construct($id,$tipo_hab_id)
    {
        $this->id=$id;
        $this->tipo_habi=Tipo_habitacion::buscarId($tipo_hab_id);
    }

    public static function  listar(){
        $lista=[];
        $db=Conectar::conexion();
        foreach ($sql->fetchAll() as $habi) {
            $lista[]= new Habitacion($habi['id'],$habi['tipo_habitacion_id']);
        }
        return $lista;
    }
 

    public static function  agregar(Habitacion $habi){
        $db=Conectar::conexion();


        try{
            $insert=$db->prepare('INSERT INTO habitacion values (:id,:tipo_habitacion_id)');
            $insert->bindValue('id',$habi->id);
            $insert->bindValue('tipo_habitacion_id',$habi->tipo_habi->id);
            $insert->execute();

        }catch(Exception $e){
            echo "Fallo: ". $e->getMessage();
        }

    }


    public static function actulizar($habi){
        $db=Conectar::conexion();
        $update=$db->prepare('UPDATE habitacion SET  tipo_habitacion_id=:tipo_habitacion_id WHERE id=:id');
        
        $update->bindValue('tipo_habitacion_id',$habi->id);
        $update->bindValue('id',$habi->id);
        $update->execute();
    }




    public static function eliminar($id){


        $db=Conectar::conexion();
        $delete=$db->prepare('DELETE FROM habitacion WHERE ID=:id');
        $delete->bindValue('id',$id);
        $delete->execute();
    }


    public static function buscarId($id){
        //buscar
        $db=Conectar::conexion();
        $select=$db->prepare('SELECT * FROM habitacion WHERE ID=:id');
        $select->bindValue('id',$id);
        $select->execute();
        //asignarlo al objeto usuario
        $habiBD=$select->fetch();
        $habi= new Habitacion($habiBD['id'],$habiBD['nombre_tipo'],$habiBD['precio']);
        return $habi;
    }
}
