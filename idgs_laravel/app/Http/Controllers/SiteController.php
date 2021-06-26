<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use Illuminate\Support\Facades\Auth as Auth;

class SiteController extends Controller
{
    public function mision()
    {
        $titulo = "Mision";
        $activo = true;
        // $servicios = [];
        $servicios = ["Ventas", "Rentas", "Compras"];
        //return view('mision',["titulo"=>$titulo]);
        return view('site.mision', compact('titulo', 'activo', 'servicios'));
    }
    public function vision()
    {
        $titulo = "Vision";
        //return view('mision',["titulo"=>$titulo]);
        return view('site.vision', compact('titulo'));
    }

    // Login Sin Libreria
    public function home()
    {
        return view('site.home');
    }
    public function login()
    {
        return view('site.login');
    }
    
    public function signin()
    {
        return view('site.signin');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function loginPost(Request $request)
    {
        // Ejecutar validaciones de la petición
        $validateData = $request->validate([
            'password' => 'required|min:5|max:10',
            'email' => 'required|email'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return Redirect()->route('login')->withErrors(
                ["password" => "Las credenciales no coinciden"]
            );
        }
    }
}
