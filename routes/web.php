<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiltroEmpresasController;
use App\Http\Controllers\postulacionController;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

/* ruta para llamar la vista de login*/

Route::get('vistaInicio',[UserController::class,'vista'])->name('inicioSesion');
Route::post('inicioSesion',[UserController::class,'login'])->name('logeo');

//Route::post('iniciar-Sesion', 'UserController@login')->name('user-login');

Route::get('/error', function () {
    return view('error404');
});

/* ruta para llamar la vista de el filtro de empresas */
Route::get('FiltroEmpresa', [FiltroEmpresasController::class, 'FiltroVistaEmpresa']);

/* ruta para llamar la vista de postulacion*/
Route::get('postulacion', [postulacionController::class, 'vistaPostulacion'])->name('postularce');

/* grupo de rutas para admin */
Route::group(['prefix' => 'admin'], function() {
    /* retona la vista principal */
    Route::get('inicio', [adminController::class,'vistaAdmin'])->name('adm');
    /* retorna la vista modulo empresas */
    Route::get('ModuloEmpresas', [adminController::class,'vistaModulEmpresas'])->name("ModuloEmpresa");
});


