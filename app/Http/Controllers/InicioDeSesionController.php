<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioDeSesionController extends Controller
{
    public function vistaLogin(){
        return view('login');
    }
}
