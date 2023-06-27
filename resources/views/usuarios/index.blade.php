@extends('layouts.panel')

@section('content')


<div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">Usuarios</h3>
                </div>
                <div class="col text-right">
                <a href="{{url('/usuarios/create')}}" class="btn btn-sm btn-primary">Nuevo usuario</a>
                </div>
            </div>
            </div>
            <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Local</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Email</th>
                    
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $usuarios)
                        <tr>
                            <th scope="row">
                                {{ $usuarios->name.' '.$usuarios->apellido}}
                            </th>
                            <td>
                                {{ $usuarios->nombrelocal}}
                            </td>
                            <th scope="row">
                                {{$usuarios->cargo }}
                            </th>
                            <td>
                                {{ $usuarios->email}}
                            </td>
                          
                        
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
            </div>
        </div>

@endsection
