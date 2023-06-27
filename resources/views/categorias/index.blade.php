@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Categorias comerciales</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/categorias/create')}}" class="btn btn-sm btn-primary">Nueva categoria</a>
                </div>
            </div>
            </div>
            <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre de categoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">opciones</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <th scope="row">
                                {{ $categoria->name}}
                            </th>
                            <td>
                                {{ $categoria->description}}
                            </td>
                            <td>
                                {{ $categoria->estado}}
                            </td>
                            
                            <td>
                               
                                <form action="{{ url('/categorias/'.$categoria->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('/categorias/'.$categoria->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
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
