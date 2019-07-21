<?php 
class Persona{
    public $cedula;
    public $nombres;
    public $apellidos;
    public $direccion;
    public $correo;
    public $tipo_docu_id;


    function __construct($cedula, $nombres, $apellcedulaos, $direccion,$correo,$tipo_docu_id)
	{
        $this->cedula=$cedula;
        $this->nombres=$nombres;
        $this->apellcedulaos=$apellcedulaos;
        $this->direccion=$direccion;
        $this->correo=$correo;
        $this->tipo_docu_id=$tipo_docu_id;

        
    } 

    function __construct1(Persona $persona)
	{
        $this->cedula=$persona->cedula;
        $this->nombres=$persona->nombres;
        $this->apellcedulaos=$persona->apellcedulaos;
        $this->direccion=$persona->direccion;
        $this->correo=$persona->correo;
        $this->tipo_docu_cedula=$persona->tipo_docu_cedula;

        
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
        
        try {  
        $insert=$db->prepare('INSERT INTO persona VALUES(:id,:nombres,:apellcedulaos,:direccion,:correo,:tipo_docu_id)');
        $insert->bindValue('id',$persona->cedula);
        $insert->bindValue('nombres',$persona->nombres);
        $insert->bindValue('apellcedulaos',$persona->apellcedulaos);
        $insert->bindValue('direccion',$persona->direccion);
        $insert->bindValue('correo',$persona->correo);
        $insert->bindValue('tipo_docu_id',$persona->tipo_docu_id);
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
        
    }


    public static function actulizar($persona){
		$db=Conectar::conexion();
		$update=$db->prepare('UPDATE persona SET  nombres=:nombres,apellidos=:apellidos,direccion=:direccion,correo=:correo,tipo_docu_cedula=:tipo_docu_id WHERE id=:id');
		
        $update->bindValue('nombres',$persona->nombres);
        $update->bindValue('apellidos',$persona->apellidos);
        $update->bindValue('direccion',$persona->direccion);
        $update->bindValue('correo',$persona->correo);
        $update->bindValue('tipo_docu_id',$persona->tipo_docu_id);
		$update->execute();
    }
    



    public static function eliminar($cedula){
		$db=Conectar::conexion();
		$delete=$db->prepare('DELETE FROM persona WHERE id=:id');
		$delete->bindValue('id',$cedula);
		$delete->execute();
    }
    


    public static function buscarcedula($cedula){
		//buscar
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM persona WHERE id=:id');
		$select->bindValue('id',$cedula);
		$select->execute();
		//asignarlo al objeto usuario
		$personaDb=$select->fetch();
		$usuario= new Usuario($personaDb['id'],$personaDb['nombres'],$personaDb['apellidaos'],$personaDb['direccion'],$personaDb['correo'],$personaDb['tipo_docu_id']);
		return $usuario;
	}
}