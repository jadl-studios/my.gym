<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class LoginAlunoController
{
    public function index()
{
    return view('login-professor');
}

    public function login(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/area-aluno');
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha inválidos.',
        ]);
    }




}
