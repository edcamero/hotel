  <?php  
  class Usuario
  {
    public $id;
	public $nombre;
	public $password;
	public $rol;
 


    function __construct($id, $nombre, $password, $rol)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->password=$password;
		$this->rol=$rol;
    }
    

    public static function listar(){
		$listaUsuarios =[];
		$db=Conectar::conexion();
		$sql=$db->query('SELECT * FROM usuario');
 
		// carga en la $listaUsuarios cada registro desde la base de datos
		foreach ($sql->fetchAll() as $usuario) {
			$listaUsuarios[]= new Usuario($usuario['id'],$usuario['nombre_user'], $usuario['password'],$usuario['rol']);
		}
		return $listaUsuarios;
    }

    public static function agregar($usuario){
		$db=Conectar::conexion();
		try { 
		
		$insert=$db->prepare('INSERT INTO usuario VALUES(:id,:nombre_user,:password,:rol)');
		$insert->bindValue(':id',$usuario->id);
		
        $insert->bindValue(':nombre_user',$usuario->nombre);
        $insert->bindValue(':password',$usuario->password);
        $insert->bindValue(':rol',$usuario->rol);
		$insert->execute();
		
	} catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
        
    
		
    }

    public static function actulizar($usuario){
		$db=Conectar::conexion();
		$update=$db->prepare('UPDATE usuario SET  nombres_user=:nombre, password=:password,rol=:rol WHERE id=:id');
		$update->bindValue('id',$usuario->id);
		$update->bindValue('nombre',$usuario->usuario);
		$update->bindValue('password',$usuario->password);
		$update->bindValue('rol',$usuario->rol);
		$update->execute();
	}
    

    	// la función para eliminar por el id
	public static function eliminar($id){
		$db=Conectar::conexion();
		$delete=$db->prepare('DELETE FROM usuario WHERE ID=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
	}


    public static function buscarId($id){
		//buscar
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM usuario WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto usuario
		$usuarioDb=$select->fetch();
		$usuario= new usuario($usuarioDb['id'],$usuarioDb['nombre_user'],$usuarioDb['password'],$usuarioDb['rol']);
		return $usuario;
	}

  }

    ?>