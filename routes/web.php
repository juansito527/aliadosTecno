<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiltroEmpresasController;
use App\Http\Controllers\InicioDeSesionController;
use App\Http\Controllers\postulacionController;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/error', function () {
    return view('error404');
});

/* ruta para llamar la vista de el filtro de empresas */
Route::get('FiltroEmpresa', [FiltroEmpresasController::class, 'FiltroVistaEmpresa']);

/* ruta para llamar la vista de postulacion*/
Route::get('postulacion', [postulacionController::class, 'vistaPostulacion'])->name('postularce');

/* ruta para llamar la vista de login*/
Route::get('iniciar-Sesion', [InicioDeSesionController::class, 'vistaLogin'])->name('login');

/* ruta para llamar la vista de adm*/
Route::get('Admin', [adminController::class, 'vistaAdmin'])->name('adm');
