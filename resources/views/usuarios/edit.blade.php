@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Editar Usuarios</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/usuarios')}}" class="btn btn-sm btn-success">
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
        
        <form action="{{ url('/usuarios/'.$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
  
            <div class="row mb-3">
                <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
  
                <div class="col-md-6">
                    <input placeholder="Apellido" class="form-control" name="apellido" value="{{ old('apellido') }}" required autocomplete="name" autofocus>
                </div>
            </div>
  
            <div class="row mb-3">
              <label for="apellido" class="col-md-4 col-form-label text-md-end">local</label>
  
              <div class="col-md-6">
                  <select class="form-control" name="local" >
                      <option selected disabled> Seleccione el local </option>
                      @foreach ($local as $locales)
                          <option value="{{$locales->id}}" {{ $user->local == $locales->id ? 'selected' : '' }}>{{$locales->namelocal}}</option>
                      @endforeach
                  </select>
                 
              </div>
            </div>
  
  
            <div class="row mb-3">
  
             
                <label for="cargo" class="col-md-4 col-form-label text-md-end">Cargo</label>
  
                <div class="col-md-6">
  
                      <select class="form-control" name="cargo" required autocomplete="cargo">
                          <option selected disabled> Seleccione el cargo </option>
                              <option value="ADMINISTRADOR" {{ $user->cargo == 'ADMINISTRADOR' ? 'selected' : '' }} required>ADMINISTRADOR</option>
                              <option value="VIGILANTE" {{ $user->cargo == 'VIGILANTE' ? 'selected' : '' }} required>VIGILANTE</option>
                              <option value="REPRESENTANTE" {{ $user->cargo == 'REPRESENTANTE' ? 'selected' : '' }} required>REPRESENTANTE</option>
                      </select>
                  
  
                </div>
            </div>
  
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
  
                <div class="col-md-6">
                    <input type="email" placeholder="Correo Electronico" class="form-control" name="email"  value="{{old('email', $user->email)}}" required >
  
                   
                </div>
            </div>
  
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
  
                <div class="col-md-6">
                    <input placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
  
            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar contraseña</label>
  
                <div class="col-md-6">
                    <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
  

            <button type="submit" class="btn btn-sm btn-primary"> Guardar Local</button>
        </form>
      </div>
</div>

@endsection
