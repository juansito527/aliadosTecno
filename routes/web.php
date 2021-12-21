<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiltroEmpresasController;
use App\Http\Controllers\postulacionController;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');


/* ruta para llamar la vista de login*/
Route::post('auth/check',[MainController::class, 'verificarLogin'])->name('verificarLogin');

Route::get('/cerrarSesion',[MainController::class,'cerrarSesion'])->name('cerrarSesion');

Route::get('/error', function () {
    return view('error404');
});

/* ruta para llamar la vista de el filtro de empresas */
Route::get('FiltroEmpresa', [FiltroEmpresasController::class, 'FiltroVistaEmpresa']);

/* ruta para llamar la vista de postulacion*/
Route::get('postulacion', [postulacionController::class, 'vistaPostulacion'])->name('postularce');

/* grupo de rutas para admin */
Route::group(['middleware' => 'AuthCheck'], function() {
    Route::get('auth/login',[MainController::class, 'login'])->name('login');
    Route::get('admin/menuAdmin',[MainController::class,'menuAdmin'])->name('menuAdmin');
    Route::get('admin/ModuloEmpresas', [adminController::class,'vistaModulEmpresas'])->name("ModuloEmpresa");
    Route::get('admin/postulaciones', [adminController::class,'vistaPostulaciones'])->name("postulaciones");
    Route::get('admin/usuarios', [adminController::class,'vistaUsuarios'])->name("usuarios");
    Route::get('admin/aliados', [adminController::class,'vistaAliados'])->name("aliados");
});



