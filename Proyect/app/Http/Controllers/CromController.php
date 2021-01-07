<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CromController extends Controller
{
    public function cromosAdmin(){
        return view('uploadCromos');
    }
}
