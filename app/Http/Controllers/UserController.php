<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function vista(){
        return view('login');
    }

    public function menuAdmin(){
        return view('admin.adm');
    }

    public function login(Request $request)
    {
        $data = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Ingrese correo',
            'password.required' => 'Ingrese contraseña',
        ]);

        if (Auth::attempt($data)){
            $con = 'Ok';
        }

        $email = $request->get('email');
        $query = User::where('email', '=' ,$email)->get();

        if($query->count() !=0){
            $hashp = $query[0]->password;
            $password = $request->get('password');
            if (password_verify($password, $hashp))
            {
                return view('admin.adm');
            }
            else{
                return back()->withErrors(['password' => 'Contraseña no válida'])->withInput([request('password')]);
            }
        }
        else{
            return back()->withErrors(['email' => 'Correo electrónico no válido'])->withInput([request('email')]);
        }
    }

    public function cerrarSesion(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('inicioSesion');
    }
    
}
