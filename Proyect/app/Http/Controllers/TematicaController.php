<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tematica;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;
use Validator;
use Flash;
use Delete;
use Update;

class TematicaController extends Controller
{
    public function index(){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->simplePaginate(2);
        return view('administrador/adminTematicas')->with('tematicas', $tematicas);
    }

    public function create(){
        return view('adminTematicas.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'imgTematica' => ['required', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombretematica' => ['required', 'string', 'min:4'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $file=$request->file('imgTematica');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/imgTematicas', $nameImg);
            $tematicas = tematica::create([
                'imgTematica' => $nameImg,
                'nombretematica' => $request->nombretematica,
            ]);
            return back()
            ->with('mensaje', 'La temática a sido creada con exito!');
        }
    }

    public function edit(tematica $adminTematica){
        return view('administrador/editTematicas', compact('adminTematica'));
    }

    public function update(Request $request, tematica $adminTematica){
        $validator = Validator::make($request->all(),[
            'imgTematica' => ['required', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombretematica' => ['required', 'string', 'min:4'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $file=$request->file('imgTematica');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/imgTematicas', $nameImg);

            $request->merge([
                'imgTematica' => $nameImg
            ]);

            $adminTematica->update($request->all());
            return redirect()->route('adminTematicas.index')
            ->with('mensaje', 'La temática a sido editada con exito!');
        }
    }
}
