<?php

namespace App\Http\Controllers;

abstract class AreaAlunoController
{
    public function index()
{
    if(session('usuario_logado.tipo') !== 'aluno'){
        return redirect()->route('login.aluno');
    }
    return view('area-aluno');
}
}