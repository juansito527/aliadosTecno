<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function vistaAdmin(){
        return view('adm');
    }
}
