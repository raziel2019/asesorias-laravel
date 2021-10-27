@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Usuarios</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-primary">Agregar
                                    usuarios</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Escolaridad</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                @foreach ($usuarios as $orden => $users)
                                    <tbody>
                                        <tr>
                                            <td>{{ ++$orden }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->Escolaridad }}</td>
                                            @foreach ($users->roles as $role)
                                                <td>{{ $role->name }}</td>
                                            @endforeach
                                            <td>{{ $users->created_at }}</td>


                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{route("usuarios.destroy", $users->id)}}" method="POST"> 
                                                            @method("DELETE")
                                                            @csrf
                                                        <a class="dropdown-item" href="{{ route('usuarios.edit', $users->id ) }}">Edit</a>
                                                        <input class="dropdown-item" type="submit" value="Eliminar">
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                @endforeach
                            </table>
                        </div>

                    </div>

                    <div class="card-footer py-4">

                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
