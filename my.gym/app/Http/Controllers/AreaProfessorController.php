<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AreaProfessorController extends Controller
{
    public function index()
{
    if(session('usuario_logado.tipo') !== 'professor'){
        return redirect()->route('login.professor');
    }
    return view('area-professor');
}
}
