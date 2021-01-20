<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tematica;
use App\Models\pregunt;
use App\Models\album;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tematicas = \DB::table('tematicas')
            ->join('albums', 'albums.id', '=', 'tematicas.id_album')
            ->select('tematicas.id', 'tematicas.imgTematica', 'tematicas.nombretematica', 'albums.nombreAlbum')
            ->orderBy('albums.id', 'ASC')
            ->get();

        return view('usuario/juego')
        ->with('tematicas', $tematicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntas = \DB::table('pregunts')
        ->join('tematicas', 'tematicas.id', '=', 'pregunts.id_tematica')
        ->select('pregunts.id', 'pregunts.descripcion', 'pregunts.respuestaCorrecta', 
            'pregunts.respuestaCorrecta AS opcion1', 'pregunts.respuestaError1 AS opcion2', 'pregunts.respuestaError2 AS opcion3',
            'pregunts.respuestaError3 AS opcion4', 'pregunts.nivel', 'tematicas.id','tematicas.nombretematica')
        ->where('tematicas.id', '=', $id)
        ->orderBy('pregunts.nivel', 'ASC')
        ->get();
        
        $tematica = tematica::findOrFail($id);

        return view('usuario/quiz', compact('preguntas', 'tematica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
