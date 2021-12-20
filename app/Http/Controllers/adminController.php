<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function vistaModulEmpresas(){
        $data = ['UsuarioLogeado'=>User::where('id', '=', session('UsuarioLogeado'))->first()];
        return view('admin/ModulEmpresas', $data);
    }

    public function vistaPostulaciones(){
        $data = ['UsuarioLogeado'=>User::where('id', '=', session('UsuarioLogeado'))->first()];
        return view('admin/postulaciones', $data);
    }

    public function vistaUsuarios(){
        $data = ['UsuarioLogeado'=>User::where('id', '=', session('UsuarioLogeado'))->first()];
        return view('admin/usuarios', $data);
    }

    public function vistaAliados(){
        $data = ['UsuarioLogeado'=>User::where('id', '=', session('UsuarioLogeado'))->first()];
        return view('admin/aliados', $data);
    }

}
