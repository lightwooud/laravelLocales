@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Editar subcategorias</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/subcategorias')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"> </i> 
                    Regresar</a>
                </div>
            </div>
            </div>
      <div class="card-body">
        @if($errors->any())
            @foreach ( $errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Por favor!!</strong> {{$error}}
                </div>
            @endforeach
        @endif
        <form action="{{ url('/subcategorias/'.$subcategoria->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre de la subcategoria</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $subcategoria->name)}} " required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="description" class="form-control" value="{{old('descripcion', $subcategoria->description)}} " required>
            </div>

            
            <div class="form-group">
                <label for="estado">Categoria</label>
                <select class="form-control" name="categoria" >
                    <option selected disabled> Seleccione la categoria</option>
                    @foreach ($categoria as $categorias)
                        <option value="{{$categorias->id}}" {{ $categorias->id == $subcategoria->categoria ? 'selected' : '' }}>{{$categorias->name}}</option>
                     @endforeach
                </select>
            </div>
            
          
            <div class="form-group">
                <label for="estado">Estado</label>
                
                <select class="form-control" name="estado"  >
                    <option selected disabled> Seleccione el estado </option>
                        <option value="ACTIVO" {{ $subcategoria->estado == 'ACTIVO' ? 'selected' : '' }} required>ACTIVO</option>
                          <option value="INACTIVO"  {{ $subcategoria->estado == 'INACTIVO' ? 'selected' : '' }}  required>INACTIVO</option>
                </select>
               
            </div>
            
            <button type="submit" class="btn btn-sm btn-primary"> Guardar categoria</button>
        </form>
      </div>
</div>

@endsection