<?php 
class Tipo_cliente{
    public $id;

    public $nombre;
    public $descuento;


    function  __construct($id,$nombre,$descuento){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->descuento=$descuento;


    }


    function listar(){
        $listaTipoClientes =[];
		$db=Conectar::conexion();
		$sql=$db->query('SELECT * FROM tipo_cliente');
 
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($sql->fetchAll() as $tipoCliente) {
			$listaTipoClientes[]= new Tipo_cliente($tipoCliente['id'],$tipoCliente['nombre'], $tipoCliente['descuento']);
		}
		return $listaTipoClientes;
    }


    public static function agregar($tipo_cliente){
        $db=Conectar::conexion();
        
        try {  
        $insert=$db->prepare('INSERT INTO tipo_cliente VALUES(:id,:nombre,:descuento)');
        $insert->bindValue('id',$tipo_cliente->id);
        $insert->bindValue('nombre',$tipo_cliente->nombre);
        $insert->bindValue('descuento',$tipo_cliente->descuento);
        
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
       
    }



    public static function actulizar($tipo_cliente){
		$db=Conectar::conexion();
		$update=$db->prepare('UPDATE tipo_cliente SET  nombre=:nombre,descuento=:descuento WHERE id=:id');
		
        $update->bindValue('nombre',$tipo_cliente->nombre);
        $update->bindValue('descuento',$tipo_cliente->descuento);
        $update->bindValue('id',$tipo_cliente->id);
		$update->execute();
    }

    public static function eliminar($id){
		$db=Conectar::conexion();
		$delete=$db->prepare('DELETE FROM tipo_cliente WHERE ID=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
    }


    public static function buscarId($id){
		//buscar
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM tipo_cliente WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto usuario
		$tipoClieDb=$select->fetch();
		$tipo_cli= new Tipo_cliente($tipoClieDb['id'],$tipoClieDb['nombre'],$tipoClieDb['descuento']);
		return $tipo_cli;
	}
}