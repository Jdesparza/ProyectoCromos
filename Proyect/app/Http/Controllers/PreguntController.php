<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntController extends Controller
{
    public function preguntasAdmin(){
        return view('uploadPreguntas');
    }
}
