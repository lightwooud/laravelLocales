@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Editar Locales</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/locales')}}" class="btn btn-sm btn-success">
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
        <form action="{{ url('/locales/'.$local->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="local">Nombre del local</label>
                <input type="text" name="namelocal" class="form-control" value="{{old('namelocal', $local->namelocal)}} " required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del representante</label>
                <input type="text" name="namelegal" class="form-control" value="{{old('namelegal', $local->namelegal)}} " required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido del representante</label>
                <input type="text" name="apellidoslegal" class="form-control" value="{{old('apellidolegal', $local->apellidoslegal)}} " required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicacion</label>
                <input type="text" name="ubicacion" class="form-control" value="{{old('ubicacion', $local->ubicacion)}} " required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{old('telefono', $local->telefono)}} " required>
            </div>

         

            <div class="form-group">
                <label for="estado">Categoria</label>
                <select class="form-control" name="categoria" >
                    <option selected disabled> Seleccione la categoria</option>
                    @foreach ($categoria as $categorias)
                        <option value="{{$categorias->id}}" {{ $categorias->id == $local->subcategoria ? 'selected' : '' }}>{{$categorias->name}}</option>
                     @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="categoria">Subcategoría</label>
                <select class="form-control" name="subcategoria" id="subcategoria">
                    <option selected disabled>Seleccione la subcategoría</option>
                    @foreach ($subcategoria as $subcategorias)
                    <option value="{{ $subcategorias->id }}" {{ $subcategorias->id == $local->subcategoria ? 'selected' : '' }}>{{ $subcategorias->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="estado">Estado</label>
                
                <select class="form-control" name="estado"  >
                    <option selected disabled> Seleccione el estado </option>
                        <option value="ACTIVO" {{ $local->estado == 'ACTIVO' ? 'selected' : '' }} required>ACTIVO</option>
                        <option value="EN DEUDA"  {{ $local->estado == 'EN DEUDA' ? 'selected' : '' }}  required>EN DEUDA</option>
                        <option value="DESALOHADO"   {{ $local->estado == 'DESALOHADO' ? 'selected' : '' }} required>DESALOHADO</option>
                        <option value="INACTIVO"  {{ $local->estado == 'INACTIVO' ? 'selected' : '' }}  required>INACTIVO</option>
                </select>
               
            </div>
            
            <button type="submit" class="btn btn-sm btn-primary"> Guardar Local</button>
        </form>
      </div>
</div>

@endsection
