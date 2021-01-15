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

        $cromos = \DB::table('croms')
        ->join('tematicas', 'tematicas.id', '=', 'croms.id_tematica')
        ->select('croms.id', 'croms.imgCromo', 'croms.nombreCromo', 'tematicas.nombretematica')
        ->orderBy('croms.id', 'ASC')
        ->simplePaginate(5);

        return view('administrador/uploadCromos')
        ->with('tematicas', $tematicas)
        ->with('cromos', $cromos);
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

    public function destroy(crom $id){
        $cromos = crom::find($id);
        $cromos->each->delete();
        
        return back()
        ->with('mensaje', 'El cromo a sido borrado con exito!');
    }

    public function edit(crom $uploadCromo){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();

        return view('administrador/editCromos', compact('uploadCromo', 'tematicas'));
    }

    public function update(Request $request, crom $uploadCromo){
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

            $request->merge([
                'imgCromo' => $nameImg
            ]);

            $uploadCromo->update($request->all());
            return redirect()->route('uploadCromos.index')
            ->with('mensaje', 'El cromo a sido editado con exito!');
        }
    }

}
