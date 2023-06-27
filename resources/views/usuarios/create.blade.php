@extends('layouts.panel')

@section('content')
<div class="container md-12 mb-4">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class=" col-md-12 mb-4">
        
        <div class="card bg-secondary shadow border-0">
           
          <div class="card-body px-lg-5 py-lg-5">
            <div class="col text-right">
                <a href="{{url('/usuarios')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"> </i> 
                    Regresar</a>
            </div>
        @if ($errors->any())
            <div class="text-center text-muted mb-2">
                <h4>Se encontro el siguiente error.</h4>
            </div>
            <div class="alert alert-danger mb-4" role="alert">
               {{ $errors->first()}}
            </div>
        @else
            <div class="text-center text-muted mb-4">
                <small>Ingresa los datos del usuario</small>
            </div>
            
        @endif
            
        <form method="POST" action="{{ url('/usuarios')}}">
          @csrf
            
          <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

              <div class="col-md-6">
                  <input placeholder="Nombre" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
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
                        <option value="{{$locales->id}}" required>{{$locales->namelocal}}</option>
                    @endforeach
                </select>
               
            </div>
          </div>


          <div class="row mb-3">

                
                
           
              <label for="cargo" class="col-md-4 col-form-label text-md-end">Cargo</label>

              <div class="col-md-6">

                    <select class="form-control" name="cargo" required autocomplete="cargo">
                        <option selected disabled> Seleccione el cargo </option>
                            <option value="ADMINISTRADOR" required>ADMINISTRADOR</option>
                            <option value="VIGILANTE" required>VIGILANTE</option>
                            <option value="REPRESENTANTE" required>REPRESENTANTE</option>
                    </select>
                

              </div>
          </div>

          <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

              <div class="col-md-6">
                  <input type="email" placeholder="Correo Electronico" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

                 
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

          <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Registrar
                  </button>
              </div>
          </div>
      </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection