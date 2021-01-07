<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TematicaController extends Controller
{
    public function tematicasAdmin(){
        return view('adminTematicas');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombretematica' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombretematica' => $data['nombretematica'],
        ]);
    }
}
