<?php 

class Imagen{
    public $id;
    public $id_tipo_hab;
    public $nombre;
    public $descripcion;
    public $ruta;

    function __construct($id,$id_tipo_hab,$nombre, $descripcion,$ruta){
        $this->id=$id;
        $this->id_tipo_hab=$id_tipo_hab;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->ruta=$ruta;
    }


    public static function listar(){
		$listaImagenes =[];
		$db=Conectar::conexion();
		$sql=$db->query('SELECT * FROM imagen');
 
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($sql->fetchAll() as $img) {
			$listaImagenes[]= new Imagen($img['id'],$img['id_tipo_hab'],$img['nombre_imagen'], $img['descripcion'],$persona['ruta_img']);
		}
		return $listaImagenes;
    }

    public static function agregar($imagen){
        $db=Conectar::conexion();
        
        try {  
        $insert=$db->prepare('INSERT INTO imagen VALUES(:id,:id_tipo_hab,:nombre_imagen,:descripcion,:ruta_img)');
        $insert->bindValue('id',$imagen->id);
        $insert->bindValue('id_tipo_hab',$imagen->id_tipo_hab);
        $insert->bindValue('nombre_imagen',$imagen->nombre);
        $insert->bindValue('descripcion',$imagen->descripcion);
        $insert->bindValue('ruta_img',$imagen->ruta);

        
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
       
    }



    public static function eliminar($id,$nombre){
		$db=Conectar::conexion();
		$delete=$db->prepare('DELETE FROM imagen WHERE ID=:id and nombre_imagen=:nombre');
        $delete->bindValue('id',$id);
        $delete->bindValue('nombre',$nombre);
		$delete->execute();
    }


    public static function buscarId($id){
        //buscar
        
		$listaImagenes =[];
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM imagen WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($select->fetchAll() as $img) {
			$listaImagenes[]= new Imagen($img['id'],$img['id_tipo_hab'],$img['nombre_imagen'], $img['descripcion'],$persona['ruta_img']);
		}
		return $listaImagenes;
		
		
		//asignarlo al objeto usuario
		
	}



}