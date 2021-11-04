<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::group(['middleware' => ['auth']], function() {
    
Route::get('inicio', function () {
    return view('inicio.inicio');
});
});


Route::group(['middleware' => ['auth']], function() {
    require_once __DIR__ . '/usuarios/usuariosRoutes.php';

    require_once __DIR__ . '/usuarios/alumnosRoutes.php';

    require_once __DIR__ . '/usuarios/profesoresRoutes.php';
 
    require_once __DIR__ . '/clases/clasesRoutes.php';

    require_once __DIR__ . '/clases/horariosRoutes.php';

    require_once __DIR__ . '/facturas/facturasRoutes.php';

    require_once __DIR__ . '/pagos/pagosRoutes.php';
});
