<?php

namespace App\Http\Controllers;

use App\Models\local;
use App\Models\Subcategorias;
use App\Models\Categorias;
use Illuminate\Http\Request;


class LocalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        $locales= local::join('subcategorias', 'locals.subcategoria', '=', 'subcategorias.id')
        ->where('locals.estado','!=', 'INACTIVO')
        ->select('locals.*','subcategorias.name as nombresubcategoria')
        ->get();
     
        return view('locales.index', compact('locales'));
    }

    public function create(){
        $categoria = Categorias::select('categorias.*')
        ->get();

        $subcategoria = Categorias::join('subcategorias', 'categorias.id', '=', 'subcategorias.categoria')
        ->select('subcategorias.*')
        ->get();

        return view('locales.create',compact('categoria','subcategoria'));
    }

    public function sendData(Request $request){
        $rules = [
            'namelocal' => 'required|min:3',
            'namelegal' => 'required|min:3',
            'ubicacion' => 'required|min:3',
            'apellidoslegal' => 'required|min:3',
            'telefono' => 'required|min:3',
            'estado' => 'required',
            'subcategoria' => 'required',
            'categoria' => 'required',

        ];

        $messages = [
            'namelocal.required' => 'El nombre del local es obligatorio.',
            'namelocal.min' => 'El nombre del local debe tener mas de 3 caracteres.',
            'namelegal.required' => 'El nombre del representante legal es obligatorio.',
            'namelegal.min' => 'El nombre del representante legal debe tener mas de 3 caracteres.',
            'apellidolegal.required' => 'El apellido del representante legal es obligatorio.',
            'apellidoslegal.min' => 'El apellido del representante legal debe tener mas de 3 caracteres.',
            'ubicacion.required' => 'la ubicacion del local es obligatorio.',
            'ubicacion.min' => 'La ubicacion del local debe tener mas de 3 caracteres.',
            'telefono.min' => 'El telefono debe tener mas de 3 caracteres.',
            'telefono.required' => 'El telefono  es obligatorio.',
            'estado.required' => 'El estado es obligatorio.',
            'categoria.required' => 'La categoria es obligatoria.',
            'subcategoria.required' => 'La subcategoria es obligatorio.',
            
        ];
        $this->validate($request, $rules, $messages);
        $Local = new local();
        $Local->namelocal = $request->input('namelocal');
        $Local->namelegal = $request->input('namelegal');
        $Local->ubicacion = $request->input('ubicacion');
        $Local->apellidoslegal = $request->input('apellidoslegal');
        $Local->telefono = $request->input('telefono');
        $Local->estado = $request->input('estado');
        $Local->subcategoria = $request->input('subcategoria');
        $Local->save();

        return redirect('/locales');
    }

    public function edit(Local $local){
        $categoria = Categorias::all();
        $subcategoria= Subcategorias::all();
        return view('locales.edit', compact('local','categoria','subcategoria'));
    }

    public function update(Request $request, Local $local){
        $rules = [
            'namelocal' => 'required|min:3',
            'namelegal' => 'required|min:3',
            'ubicacion' => 'required|min:3',
            'apellidoslegal' => 'required|min:3',
            'telefono' => 'required|min:3',
            'estado' => 'required',
            'subcategoria' => 'required',
            'categoria' => 'required',

        ];

        $messages = [
            'namelocal.required' => 'El nombre del local es obligatorio.',
            'namelocal.min' => 'El nombre del local debe tener mas de 3 caracteres.',
            'namelegal.required' => 'El nombre del representante legal es obligatorio.',
            'namelegal.min' => 'El nombre del representante legal debe tener mas de 3 caracteres.',
            'apellidolegal.required' => 'El apellido del representante legal es obligatorio.',
            'apellidoslegal.min' => 'El apellido del representante legal debe tener mas de 3 caracteres.',
            'ubicacion.required' => 'la ubicacion del local es obligatorio.',
            'ubicacion.min' => 'La ubicacion del local debe tener mas de 3 caracteres.',
            'telefono.min' => 'El telefono debe tener mas de 3 caracteres.',
            'telefono.required' => 'El telefono  es obligatorio.',
            'estado.required' => 'El estado es obligatorio.',
            'categoria.required' => 'La categoria es obligatoria.',
            'subcategoria.required' => 'La subcategoria es obligatorio.',
            
        ];
        $this->validate($request, $rules, $messages);

        
        $local->namelocal = $request->input('namelocal');
        $local->namelegal = $request->input('namelegal');
        $local->ubicacion = $request->input('ubicacion');
        $local->apellidoslegal = $request->input('apellidoslegal');
        $local->telefono = $request->input('telefono');
        $local->estado = $request->input('estado');
        $local->subcategoria = $request->input('subcategoria');
        $local->save();

        return redirect('/locales');
    }

    public function destroy(Local $local){
        $local->delete();
        return redirect('/locales');
    }


}
