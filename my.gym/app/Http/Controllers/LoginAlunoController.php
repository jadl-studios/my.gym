<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginAlunoController extends Controller
{
    public function index()
    {
        return view('login-aluno');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($request->email === 'cristianoronaldo@mygym.com' && $request->password === '123456') {
            $request->session()->put('usuario_logado', [
                'nome' => 'Cristiano Ronaldo',
                'tipo' => 'aluno',
            ]);

            return redirect()->route('area.aluno');
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha de aluno inválidos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('usuario_logado');
        return redirect()->route('home');
    }
}
