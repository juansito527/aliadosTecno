<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postulacionController extends Controller
{
    public function vistaPostulacion(){
        return view("postulacion");
    }
}

