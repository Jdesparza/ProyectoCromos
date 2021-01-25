<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Cromos*/
        $croms = \DB::table('croms')
            ->select('croms.id','croms.descripcion', 'croms.imgCromo', 'croms.nombreCromo')
            ->orderBy('croms.id', 'ASC')
            ->simplePaginate(9);
        
        return view('/usuario/album')
        ->with('croms', $croms);
        
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
        $validator = Validator::make($request->all(),[
            'id_album' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $album = album::create([
                'id_album' => $request->id_album,
            ]);
            return back()
            ->with('mensaje', 'El álbum a sido creado con exito!');
        }
        return view('/usuario/album')
        ->with('mensaje', 'Has obtenido el álbum con exito!');
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
        //
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
