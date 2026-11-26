<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AreaAlunoController extends Controller
{
    public function index()
{
    if(session('usuario_logado.tipo') !== 'aluno'){
        return redirect()->route('login.aluno');
    }
    return view('area-aluno');
}
}