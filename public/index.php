<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\DetalleController;
use Controllers\LoginController;
use Controllers\ProductoController;
use Controllers\UsuarioController;
use Controllers\PermisoController;
use Controllers\RolController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/usuarios', [UsuarioController::class,'index'] );
$router->post('/API/usuarios/guardar', [UsuarioController::class,'guardarAPI'] );

$router->get('/', [LoginController::class,'index']);
$router->get('/menu', [LoginController::class,'menu']);
$router->get('/logout', [LoginController::class,'logout']);
$router->post('/API/login', [LoginController::class,'loginAPI']);
$router->get('/productos/datatable', [ProductoController::class,'datatable']);
$router->get('/API/productos/buscar', [ProductoController::class,'buscarAPI']);
$router->get('/productos/estadistica', [DetalleController::class,'estadistica']);
$router->get('/API/productos/estadistica', [DetalleController::class,'detalleVentasAPI']);

$router->get('/permisos', [PermisoController::class,'index']);
$router->post('/API/permisos/guardar', [PermisoController::class,'guardarAPI'] );
$router->post('/API/permisos/modificar', [PermisoController::class,'modificarAPI'] );
$router->post('/API/permisos/eliminar', [PermisoController::class,'eliminarAPI'] );
$router->get('/API/permisos/buscar', [PermisoController::class,'buscarAPI'] );
$router->post('/API/permisos/activar', [PermisoController::class,'activarAPI'] );
$router->post('/API/permisos/desactivar', [PermisoController::class,'desactivarAPI'] );
$router->get('/usuarios/estadistica', [UsuarioController::class,'estadisticaUsu']);
$router->get('/API/usuarios/estadisticaUsu', [UsuarioController::class,'detalleUsuariosAPI']);


$router->get('/roles', [RolController::class,'index']);
$router->post('/API/roles/guardar', [RolController::class,'guardarAPI'] );
$router->post('/API/roles/modificar', [RolController::class,'modificarAPI'] );
$router->post('/API/roles/eliminar', [RolController::class,'eliminarAPI'] );
$router->get('/API/roles/buscar', [RolController::class,'buscarAPI'] );


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
