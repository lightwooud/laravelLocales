<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategorias;
use App\Models\Categorias;

class SubcategoriasController extends Controller
{
    public function index(){
        
        $subcategorias= Subcategorias::join('categorias', 'subcategorias.categoria', '=', 'categorias.id')
        ->where('subcategorias.estado','!=', 'INACTIVO')
        ->select('subcategorias.*','categorias.name as nombrecategoria')
        ->get();
     
        return view('subcategorias.index', compact('subcategorias'));
    }

    public function create(){
        $categorias = Categorias::all();
        return view('subcategorias.create', compact('categorias'));
    }

    public function sendData(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'estado' => 'required',
            'categoria' => 'required',

        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre  debe tener mas de 3 caracteres.',
            'description.required' => 'la descripcion es obligatorio.',
            'description.min' => 'la descripcion debe tener mas de 3 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'categoria.required' => 'El estado es obligatorio.',

            
        ];
        $this->validate($request, $rules, $messages);
        $subcategorias = new Subcategorias();
        $subcategorias->name = $request->input('name');
        $subcategorias->description = $request->input('description');
        $subcategorias->estado = $request->input('estado');
        $subcategorias->categoria = $request->input('categoria');
        $subcategorias->save();

        return redirect('/subcategorias');
    }

    public function edit(Subcategorias $subcategoria){
        $categoria = Categorias::all();
        return view('subcategorias.edit', compact('subcategoria','categoria'));
    }

    public function update(Request $request, Subcategorias $subcategoria){
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'estado' => 'required',
            'categoria' => 'required',

        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre  debe tener mas de 3 caracteres.',
            'description.required' => 'la descripcion es obligatorio.',
            'description.min' => 'la descripcion debe tener mas de 3 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'categoria.required' => 'El estado es obligatorio.',
         

            
        ];
        $this->validate($request, $rules, $messages);
      
        $subcategoria->name = $request->input('name');
        $subcategoria->description = $request->input('description');
        $subcategoria->estado = $request->input('estado');
        $subcategoria->categoria = $request->input('categoria');
        $subcategoria->save();

        return redirect('/subcategorias');
    }
}
