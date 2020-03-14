<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curriculoController extends Controller
{
    public function index(){
      return view ('index');
    }

    public function create(Request $request){
      $dados = $request->all();
      return view('curriculo', compact('dados'));
    }
}
