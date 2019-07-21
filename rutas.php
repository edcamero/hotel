<?php 
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/hotel/');
define('URL_PATH', 'http://localhost'.'/hotel/');
define('IMG', ROOT_PATH.'img/');
define('CSS',ROOT_PATH.'css/');
define('MODELS',ROOT_PATH.'models/');
define('VIEW',ROOT_PATH.'view/');
define('CONTROLLER', ROOT_PATH.'controller/');
define('DB',ROOT_PATH.'bd/');
define('FUNCIONES',ROOT_PATH.'funciones/');


if(isset($controller)){
function call($controller, $action){
    //importa el controlador desde la carpeta Controllers
    
    require_once(CONTROLLER . $controller . '_controller.php');
    //crea el controlador
    switch($controller){
        case 'usuario':
            $controller= new UsuarioController();
            break; 
        case 'cliente':
            $controller=new ClienteController();
            break;

    }
    //llama a la acción del controlador
    $controller->{$action}();
}

//array con los controladores y sus respectivas acciones
$controllers= array(
                    'usuario'=>['index','register','update', 'delete','login','registrarIndividual'],
                    'cliente'=>['registrarIndividual']
                    );
//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
if (array_key_exists($controller, $controllers)) {
    //verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
    if (in_array($action, $controllers[$controller])) {
        //llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
        call($controller, $action);
    }else{
        call('usuario', 'error');
    }
}else{// le pasa el nombre del controlador y la pagina de error
    call('usuario', 'error');
}
}

 ?>