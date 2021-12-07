<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function vistaAdmin(){
        return view('admin/adm');
    }

    public function vistaModulEmpresas(){
        return view('admin/ModulEmpresas');
    }
}
