@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Locales comerciales</h3>
                </div>
                @if (auth()->user()->cargo == 'ADMINISTRADOR')
                    <div class="col text-right">
                    <a href="{{url('/locales/create')}}" class="btn btn-sm btn-primary">Nuevo local</a>
                    </div>
                @endif
            </div>
            </div>
            <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre de negocio</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Representante legal</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Subcategoria</th>
                    <th scope="col">opciones</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($locales as $local)
                        <tr>
                            <th scope="row">
                                {{ $local->namelocal}}
                            </th>
                            <td>
                                {{ $local->ubicacion}}
                            </td>
                            <th scope="row">
                                {{ $local->namelegal.' '.$local->apellidoslegal}}
                            </th>
                            <td>
                                {{ $local->telefono}}
                            </td>
                            <td>
                                {{ $local->estado}}
                            </td>
                            <td>
                                {{ $local->nombresubcategoria}}
                            </td>
                            <td>
                                <form action="{{ url('/locales/'.$local->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if (auth()->check())

                                        @if (auth()->user()->cargo == 'REPRESENTANTE' && auth()->user()->local == $local->id)
                                            
                                         <a href="{{ url('/locales/'.$local->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                    
                                        @elseif (auth()->user()->cargo == 'ADMINISTRADOR')
                                          <a href="{{ url('/locales/'.$local->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        @endif
                                      
                                    @endif
                                
                                   
                                    
                                </form>
   
                            </td>
                        
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
            </div>
        </div>

@endsection
