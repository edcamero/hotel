<?php 
class Persona{
    public $id;
    public $nombres;
    public $apellidos;
    public $direccion;
    public $correo;
    public $tipo_docu_id;


    function __construct($id, $nombres, $apellidos, $direccion,$correo,$tipo_docu_id)
	{
		$this->id=$id;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
        $this->direccion=$direccion;
        $this->correo=$correo;
        $this->tipo_docu_id=$tipo_docu_id;
        
    }



    public static function listar(){
		$listaPersonas =[];
		$db=Conectar::conexion();
		$sql=$db->query('SELECT * FROM persona');
 
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($sql->fetchAll() as $persona) {
			$listaPersonas[]= new Persona($persona['id'],$persona['nombres'], $persona['apellidos'],$persona['correo'],$persona['direccion'],$persona['tipo_docu_id']);
		}
		return $listaPersonas;
    }



    public static function agregar($persona){
        $db=Conectar::conexion();
        echo $persona->id;
        echo '<br>';
        try {  
        $insert=$db->prepare('INSERT INTO persona VALUES(:id,:nombres,:apellidos,:direccion,:correo,:tipo_docu_id)');
        $insert->bindValue('id',$persona->id);
        $insert->bindValue('nombres',$persona->nombres);
        $insert->bindValue('apellidos',$persona->apellidos);
        $insert->bindValue('direccion',$persona->direccion);
        $insert->bindValue('correo',$persona->correo);
        $insert->bindValue('tipo_docu_id',$persona->tipo_docu_id);
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
        echo ' entro a registrar';
    }


    public static function actulizar($persona){
		$db=Conectar::conexion();
		$update=$db->prepare('UPDATE persona SET  nombres=:nombres,apellidos=:apellidos,direccion=:direccion,correo=:correo,tipo_docu_id=:tipo_docu_id WHERE id=:id');
		
        $update->bindValue('nombres',$persona->nombres);
        $update->bindValue('apellidos',$persona->apellidos);
        $update->bindValue('direccion',$persona->direccion);
        $update->bindValue('correo',$persona->correo);
        $update->bindValue('tipo_docu_id',$persona->tipo_docu_id);
		$update->execute();
    }
    



    public static function eliminar($id){
		$db=Conectar::conexion();
		$delete=$db->prepare('DELETE FROM persona WHERE ID=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
    }
    


    public static function buscarId($id){
		//buscar
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM persona WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto usuario
		$personaDb=$select->fetch();
		$usuario= new usuario($personaDb['id'],$personaDb['nombres'],$personaDb['apellidos'],$personaDb['direccion'],$personaDb['correo'],$personaDb['tipo_docu_id']);
		return $usuario;
	}
}