<?php
require_once('persona.php');
require_once('tipo_cliente.php');
require_once('usuario.php');
class Cliente extends persona{
    public $id;
    public $tipo_cliente;
    public $usuario;

    function __construct($cedula, $nombres, $apellidos, $direccion,$correo,$tipo_docu_id,$tipo_cliente_id,$id_usuario,$nombre_user,$password,$rol){
        $this->id=$cedula;
        parent::__construct($cedula, $nombres, $apellidos, $direccion,$correo,$tipo_docu_id);
        $this->tipo_cliente=Tipo_cliente::buscarId($tipo_cliente_id);
        $this->usuario=new Usuario($id_usuario,$nombre_user,$password,$rol);
        echo "registro";
    }
   
    function __construct2($id,$cedula,$tipo_cliente_id,$id_usuario){
        $this->id=$id;
        parent::__construct(Persona::buscarId($cedula));
        $this->tipo_cliente=Tipo_cliente::buscarId($tipo_cliente_id);
        $this->usuario=Usuario::buscarId($id_usuario);

    }


    public static function listar(){
		$listaClientes =[];
		$db=Conectar::conexion();
		$sql=$db->query('SELECT * FROM cliente');
 
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($sql->fetchAll() as $cliente) {
			$listaClientes[]= new Cliente($cliente['id'],$persona['cedula'], $persona['tipo_cliente_id'],$persona['usuario_id']);
		}
		return $listaPersonas;
    }




    public static function agregar($cliente){
        $db=Conectar::conexion();
        Persona::agregar($cliente);
        Usuario::agregar($cliente->usuario);

        try {  
        $insert=$db->prepare('INSERT INTO cliente VALUES(:id,:persona_id,:tipo_cliente_id ,:usuario_id)');
        $insert->bindValue('id',$cliente->id);
        $insert->bindValue('persona_id',$cliente->cedula);
        $insert->bindValue('tipo_cliente_id',$cliente->tipo_cliente->id);
        $insert->bindValue('usuario_id',$cliente->usuario->id);
        
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
    }
}