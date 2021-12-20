<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    public function menuAdmin(){
        $data = ['UsuarioLogeado'=>User::where('id', '=', session('UsuarioLogeado'))->first()];
        return view('admin.adm', $data);
    }


    function verificarLogin(Request $request){

        //validar request
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $UserInfo = User::where('email', '=', $request->email)->first();

        if(!$UserInfo){
            return back()->with('fail','No reconocemos su dirección de correo electrónico');
        }else{
            if (Hash::check($request->password, $UserInfo->password)) {
                $request->session()->put('UsuarioLogeado', $UserInfo->id);
                return redirect('admin/menuAdmin');
    
            }else{
                return back()->with('fail', 'Contraseña incorrecta');
            }
        }

    }

    public function cerrarSesion(Request $request)
    {
        if (session()->has('UsuarioLogeado')) {
            session()->pull('UsuarioLogeado');
            return redirect('auth/login');
        }
    }
}


