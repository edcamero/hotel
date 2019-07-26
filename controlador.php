<?php


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
            case 'sesion':
                $controller=new SesionController();
                break;
            case  'tipohabitacion':
            
                $controller=new TipohabitacionController();
                break;

            case 'imagen':
            $controller=new Imagen();
                break;

            case 'habitacion':
            $controller=new HabitacionController();
    
        }
        //llama a la acción del controlador
        $controller->{$action}();
    
       
    }
    
    //array con los controladores y sus respectivas acciones
    $controllers= array(
                        'usuario'=>['index','register','update', 'delete','login','registrarIndividual'],
                        'cliente'=>['registrarIndividual'],
                        'sesion'=>['login','logout'],
                        'tipohabitacion'=>['index','listar','agregar','ver','agregarImagen'],
                        'habitacion'=>['index']
                        );
    //verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
    if (array_key_exists($controller, $controllers)) {
        
        //verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
        if (in_array($action, $controllers[$controller])) {
            //llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
            call($controller, $action);
            //echo "exite metodo";
        }else{
           // call('usuario', 'error');
        }
    }else{// le pasa el nombre del controlador y la pagina de error
        call('usuario', 'error');
    }
    }
    ?>