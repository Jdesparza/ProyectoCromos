<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrearAlbumController extends Controller
{
    public function index()
    {
        $albums = \DB::table('albums')
            ->select('albums.id', 'albums.nombreAlbum')
            ->orderBy('albums.id', 'ASC')
            ->get();
            
        return view('/usuario/crearAlbum')
        ->with('albums', $albums);
    }
            
}
