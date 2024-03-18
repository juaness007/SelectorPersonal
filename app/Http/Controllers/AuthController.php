<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('welcome');
        }
        // Autenticación fallida: redireccionar con mensaje de error
        return redirect()->route('login')->withErrors(['error' => 'Credenciales incorrectas. Por favor, inténtelo de nuevo.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function welcome()
    {
        return view('welcome');
    }


}

