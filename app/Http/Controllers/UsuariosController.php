<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\local;

use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller
{
    public function index(){
        

        $users= User::join('locals', 'users.local', '=', 'locals.id')
        ->select('users.*', 'locals.namelocal as nombrelocal')
        ->get();

        return view('usuarios.index', compact('users'));
    }
    public function create(){
        $local = local::all();
        return view('usuarios.create',compact('local'));
    }
   
    
    public function sendData(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:100',
            'apellido' => 'required|min:3|max:100',
            'cargo' => 'required',
            'local' => 'required',
            'email' => 'required|min:3|email|unique:users',
            'password' => 'required|string|min:8|confirmed',

        ];

        $messages = [
            'name.required' => 'El nombre del representante obligatorio.',
            'name.min' => 'El nombre del representante debe tener mas de 3 caracteres.',
            'apellido.required' => 'El apellido del representante  es obligatorio.',
            'apellido.min' => 'El apellido del representante debe tener mas de 3 caracteres.',
            'cargo.required' => 'El cargo del local es obligatorio.',
            'local.required' => 'El cargo del local es obligatorio.',
            'email.min' => 'El email debe tener mas de 3 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'password.required' => 'la contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener mas de 3 caracteres.',
          
            
        ];
        $this->validate($request, $rules, $messages);
        $Users = new User();
        $Users->name = $request->input('name');
        $Users->apellido = $request->input('apellido');
        $Users->local = $request->input('local');
        $Users->cargo = $request->input('cargo');
        $Users->email = $request->input('email');
        $Users->password = Hash::make($request->input('password'));
        $Users->save();

        return redirect('/usuarios');
    }

  

     
    

    

}
