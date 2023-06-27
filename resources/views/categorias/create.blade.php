@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Nueva categoria</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/categorias')}}" class="btn btn-sm btn-success">
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
        <form action="{{ url('/categorias')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la categoria</label>
                <input type="text" name="name" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" name="description" class="form-control" value="" required>
            </div>
            
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" name="estado" >
                    <option selected disabled> Seleccione el estado </option>
                        <option value="ACTIVO" required>ACTIVO</option>
                        <option value="INACTIVO" required>INACTIVO</option>
                </select>
            </div>
            <button type="submit" class="btn btn-sm btn-primary"> Crear categoria</button>
        </form>
      </div>
</div>

@endsection