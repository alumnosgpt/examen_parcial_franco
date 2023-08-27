<?php

namespace Controllers;

use MVC\Router;

class MenuController {

    public static function index(Router $router) {
        $router->render('menu/index', []);
    }

    public static function cerrarsesion() {

 
       $sesion= session_destroy();


       echo json_encode($sesion);
       exit;

        if($session== true){

            echo json_encode([
                'codigo'=> '1'
            ]);
            exit;
        }
        else{

            echo json_encode([

                'codigo'=>'2'
            ]);
            exit;
        }
    }


}

