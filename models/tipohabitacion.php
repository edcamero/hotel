<?php
require_once('imagen.php');
Class Tipo_habitacion{
public $id;
public $nombre_tipo;
public $precio;
public $imagenes;



function __construct($nombre_tipo,$precio){
    
    
      
        
    
    $this->nombre_tipo=$nombre_tipo;
    $this->precio=$precio;
    $this->imagenes=Imagen::buscarId($this->id);
    
    

}






function agregarImagen(Imagen $img){
    array_push($this->imagenes,$img);
  
}

public static function listar(){
    $listaTipoHab =[];
    

    $db=Conectar::conexion();
    $sql=$db->query('SELECT * FROM tipo_habitacion');

    // carga en la $listaPersonas cada registro desde la base de datos
    foreach ($sql->fetchAll() as $tipo_habi) {
        
        $th= new Tipo_habitacion($tipo_habi['nombre_tipo'], $tipo_habi['precio']);
        $th->id=$tipo_habi['id'];
        $listaTipoHab[]=$th;
    }
    return $listaTipoHab;
}



public static function agregar($tipo_habi){
    

    $db=Conectar::conexion();
    
    try {  
    
    $insert=$db->prepare('INSERT INTO tipo_habitacion VALUES(null,:nombre_tipo,:precio)');
    //$insert->bindValue('id',$tipo_habi->id);
    
    $insert->bindValue('nombre_tipo',$tipo_habi->nombre_tipo);
    $insert->bindValue('precio',$tipo_habi->precio);
    
    $insert->execute();

if(empty($tipo_habi->imagenes)){
    foreach ($tipo_habi->imagenes as $foto) {
        Imagen::agregar($foto);
    }
}
} catch (Exception $e) {
    
    echo "Fallo: " . $e->getMessage();
  }

}



public static function actulizar($tipo_habi){
    $db=Conectar::conexion();
    $update=$db->prepare('UPDATE tipo_habitacion SET  nombre_tipo=:nombre_tipo,precio=:precio WHERE id=:id');
    
    $update->bindValue('nombre_tipo',$tipo_habi->nombre_tipo);
    $update->bindValue('precio',$tipo_habi->precio);
    $update->bindValue('id',$tipo_habi->id);
    $update->execute();
}



public static function eliminar($id){


    foreach ($this->imagenes as $foto) {
        Imagen::eliminar($foto->id);
    }
    $db=Conectar::conexion();
    $delete=$db->prepare('DELETE FROM tipo_habitacion WHERE ID=:id');
    $delete->bindValue('id',$id);
    $delete->execute();
}




public static function buscarId($id){
    //buscar
    $db=Conectar::conexion();
    $select=$db->prepare('SELECT * FROM tipo_habitacion WHERE ID=:id');
    $select->bindValue('id',$id);
    $select->execute();
    //asignarlo al objeto usuario
    $tipoHabi=$select->fetch();
    $tipo_cli= new Tipo_habitacion($tipoHabi['id'],$tipoHabi['nombre_tipo'],$tipoHabi['precio']);
    return $tipo_cli;
}


}