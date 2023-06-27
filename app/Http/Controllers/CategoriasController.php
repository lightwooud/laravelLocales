<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function index(){
        
        $categorias= Categorias::all();
     
        return view('categorias.index', compact('categorias'));
    }

    public function create(){
        return view('categorias.create');
    }

    public function sendData(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'estado' => 'required',

        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre  debe tener mas de 3 caracteres.',
            'description.required' => 'la descripcion es obligatorio.',
            'description.min' => 'la descripcion debe tener mas de 3 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
         

            
        ];
        $this->validate($request, $rules, $messages);
        $categorias = new Categorias();
        $categorias->name = $request->input('name');
        $categorias->description = $request->input('description');
        $categorias->estado = $request->input('estado');
        $categorias->save();

        return redirect('/categorias');
    }

    public function edit(Categorias $categoria){
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categorias $categoria){
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'estado' => 'required',

        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre  debe tener mas de 3 caracteres.',
            'description.required' => 'la descripcion es obligatorio.',
            'description.min' => 'la descripcion debe tener mas de 3 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
         

            
        ];
        $this->validate($request, $rules, $messages);
      
        $categoria->name = $request->input('name');
        $categoria->description = $request->input('description');
        $categoria->estado = $request->input('estado');
        $categoria->save();

        return redirect('/categorias');
    }


}
