@extends('layouts.form')
@section('title','Iniciar sesion')
@section('content')

 <!-- Page content -->
 <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
        
          <div class="card-body px-lg-5 py-lg-5">
            @if ($errors->any())
                <div class="text-center text-muted mb-2">
                    <h4>Se encontro el siguiente error.</h4>
                </div>
                <div class="alert alert-danger mb-4" role="alert">
                   {{ $errors->first()}}
                </div>
            @else
                <div class="text-center text-muted mb-4">
                    <small>Ingrese tus credenciales para ingresar al sistema</small>
                </div>
            @endif
          
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">Correo electronico</label>

                  <div class="col-md-6">
                      <input placeholder="Correo electronico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

             <!-- <div class="row mb-3">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
              </div>-->

              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          Empezar
                      </button>

                     <!-- @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                        -->
                  </div>
              </div>
          </form>
          </div>
        </div>
        <div class="row mt-3">
          <!--<div class="col-6">
            <a href="{{ route('password.request') }}" class="text-light"><small>Olvidaste tu conttaseña?</small></a>
          </div>-->
          <!--<div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light"><small>Crear cuenta nueva</small></a>
          </div>-->
        </div>
      </div>
    </div>
  </div>


@endsection
