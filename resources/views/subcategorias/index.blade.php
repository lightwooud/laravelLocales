@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Subcategorias comerciales</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/subcategorias/create')}}" class="btn btn-sm btn-primary">Nueva subcategoria</a>
                </div>
            </div>
            </div>
            <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre de subcategoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categorias</th>
                    <th scope="col">Estado</th>
                    <th scope="col">opciones</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($subcategorias as $subcategoria)
                        <tr>
                            <th scope="row">
                                {{ $subcategoria->name}}
                            </th>
                            <td>
                                {{ $subcategoria->description}}
                            </td>
                            <th scope="row">
                                {{ $subcategoria->nombrecategoria}}
                            </th>
                        
                            <td>
                                {{ $subcategoria->estado}}
                            </td>
                            
                            <td>
                               
                                <form action="{{ url('/subcategorias/'.$subcategoria->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('/subcategorias/'.$subcategoria->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
   
                            </td>
                        
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
            </div>
        </div>

@endsection
