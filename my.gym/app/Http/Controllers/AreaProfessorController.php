<?php

namespace App\Http\Controllers;

abstract class AreaProfessorController
{
    public function index()
{
    if(session('usuario_logado.tipo') !== 'professor'){
        return redirect()->route('login.professor');
    }
    return view('area-professor');
}
}
