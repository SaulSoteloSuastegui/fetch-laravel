<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function store(Request $request){

           return $request->all();

    
     //$curso=Curso::create($request->all());

    }
}
