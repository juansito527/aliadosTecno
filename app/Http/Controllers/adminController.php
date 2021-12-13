<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vistaModulEmpresas(){
        return view('admin/ModulEmpresas');
    }

    public function vistaPostulaciones(){
        return view('admin/postulaciones');
    }

    public function vistaUsuarios(){
        return view('admin/usuarios');
    }

    public function vistaAliados(){
        return view('admin/aliados');
    }

}
