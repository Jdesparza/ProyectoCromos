<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crom;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;
use Validator;
use Flash;
use Delete;
use Update;

class CromController extends Controller
{
    public function index(){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();
        return view('administrador/uploadCromos')->with('tematicas', $tematicas);
    }

    public function create(){
        return view('uploadCromos.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'imgCromo' => ['required', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombreCromo' => ['required', 'string', 'min:4'],
            'descripcion' => ['required', 'string', 'min:4'],
            'id_tematica' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $file = $request->file('imgCromo');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/imgCromos', $nameImg);

            $cromos = crom::create([
                'imgCromo' => $nameImg,
                'nombreCromo' => $request->nombreCromo,
                'descripcion' => $request->descripcion,
                'id_tematica' => $request->id_tematica,
            ]);
            return back()
            ->with('mensaje', 'El cromo ha sido subido con exito!');
        }
    }

}
