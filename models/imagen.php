<?php 

class Imagen{
    public $id;
    public $id_tipo_hab;
    public $nombre;
    public $descripcion;
    public $ruta;

    function __construct($id_tipo_hab,$nombre, $descripcion,$ruta){
        //$this-id=$id;
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
        $insert=$db->prepare('INSERT INTO imagen VALUES(null,:id_tipo_hab,:nombre_imagen,:descripcion,:ruta_img)');
       // $insert->bindValue('id',$imagen->id);
        $insert->bindValue('id_tipo_hab',$imagen->id_tipo_hab);
        $insert->bindValue('nombre_imagen',$imagen->nombre);
        $insert->bindValue('descripcion',$imagen->descripcion);
        $insert->bindValue('ruta_img',$imagen->ruta);

        
        $insert->execute();
    } catch (Exception $e) {
        
        echo "Fallo: " . $e->getMessage();
      }
       
    }

function addfile($archivo){

  $nombre_img = $archivo['name'];
$tipo = $archivo['type'];
$tamano = $archivo['size'];

          if (($nombre_img == !NULL)&& ($_FILES['imagen']['size'] > 200000))
          {
            //indicamos los formatos que permitimos subir a nuestro servidor
            if (($_FILES["imagen"]["type"] == "image/gif")
            || ($_FILES["imagen"]["type"] == "image/jpeg")
            || ($_FILES["imagen"]["type"] == "image/jpg")
            || ($_FILES["imagen"]["type"] == "image/png"))
            {
                // Ruta donde se guardarán las imágenes que subamos
              
                // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['imagen']['tmp_name'],IMG.$nombre_img);
              }else
              {
                //si no cumple con el formato
                echo "No se puede subir una imagen con ese formato ";
              }
          }else{
            //si existe la variable pero se pasa del tamaño permitido
            if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
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
      
     	$listaImagenes =[];
		$db=Conectar::conexion();
		$select=$db->prepare('SELECT * FROM imagen WHERE id_tipo_hab=:id');
    $select->bindValue('id',$id);
    
		$select->execute();
		// carga en la $listaPersonas cada registro desde la base de datos
		foreach ($select->fetchAll() as $img) {
      
			$foto= new Imagen($img['id_tipo_hab'],$img['nombre_imagen'], $img['descripcion'],$img['ruta_img']);
      $foto->id=$img['id'];
      //echo 'hola mano'.$foto->ruta;
      array_push ( $listaImagenes , $foto);
      //array_push ( $listaImagenes , $foto);
     //echo $listaImagenes[0]->nombre;
    }
		return $listaImagenes;
		
		
		//asignarlo al objeto usuario
		
  }
  

  public static function muestra($id){
      
    
 $db=Conectar::conexion();
 $select=$db->prepare('SELECT * FROM imagen WHERE id_tipo_hab=:id limit 1');
 $select->bindValue('id',$id);
 
 $select->execute();
 $ruta='';
 // carga en la $listaPersonas cada registro desde la base de datos
 foreach ($select->fetchAll() as $img) {
   
   $ruta=$img['ruta_img'];
   //echo 'hola mano'.$foto->ruta;
   //array_push ( $listaImagenes , $foto);
   //array_push ( $listaImagenes , $foto);
  //echo $listaImagenes[0]->nombre;
 }
 echo $ruta;
 
 
 //asignarlo al objeto usuario
 
}



}