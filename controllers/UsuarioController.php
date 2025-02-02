<?php

namespace Controllers;

use Exception;
use Model\Usuario;
use MVC\Router;

class UsuarioController
{
    public static function index(Router $router)
    {
        $usuarios = usuario::all();
        $router->render('usuarios/index', [
            'usuarios' => $usuarios,
        ]);
    }
    public static function guardarAPI()
    {
        try {
            $nombre = $_POST["usu_nombre"];
            $catalogo = $_POST["usu_catalogo"];
            $password = $_POST["usu_password"];
            $confirm_password = $_POST["usu_confirm_password"];

            if ($password) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $usuario = new Usuario([
                    'usu_nombre' => $nombre,
                    'usu_catalogo' => $catalogo,
                    'usu_password' => $hashed_password,
                ]);

                $resultado = $usuario->crear();

                if ($resultado['resultado'] == 1) {
                    echo json_encode([
                        'mensaje' => 'usuario guardado correctamente',
                        'codigo' => 1
                    ]);
                } else {
                    echo json_encode([
                        'mensaje' => 'Ocurrió un error',
                        'codigo' => 0
                    ]);
                }
            } else {
                echo json_encode([
                    'mensaje' => 'Las contraseña no es correcta.',
                    'codigo' => 0
                ]);
            }

        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'El usuario ya existe, ingrese uno nuevo',
                'codigo' => 0
            ]);
        }
    }
}
public static function estadisticaUsu(Router $router){
    $router->render('usuarios/estadistica', []);

}
public static function detalleUsuariosAPI(){

    $sql = "SELECT usu_estado, COUNT(usu_id) AS cantidad_usuarios
    FROM usuario
    GROUP BY usu_estado";

    try {
        
        $usuarios = Usuario::fetchArray($sql);

        echo json_encode($usuarios);
    } catch (Exception $e) {
        echo json_encode([
            'detalle' => $e->getMessage(),
            'mensaje' => 'Ocurrió un error',
            'codigo' => 0
        ]);
    }
}
