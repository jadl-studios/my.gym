<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginProfessorController extends Controller
{
    public function index()
    {
        return view('login-professor');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($request->email === 'pauloskaf@mygym.com' && $request->password === '123456') {
            $request->session()->put('usuario_logado', [
                'nome' => 'Paulo Skaf',
                'tipo' => 'professor',
            ]);

            return redirect()->route('area.professor');
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha de professor inválidos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('usuario_logado');
        return redirect()->route('home');
    }
}
