<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiltroEmpresasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return view('error404');
});

/* ruta para llamar la vista de el filtro de empresas */
Route::get('FiltroEmpresa',[FiltroEmpresasController::class,'FiltroVistaEmpresa']);
