<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\UserRequest;
use Validator;

class AdminUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('administrador');
    }

    public function index(){
        return view('adminUsers');
    }

    public function create(array $data)
    {
        //
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $usuarios = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol' => $request->rol,
            ]);
            return back();
        }
    }
}
