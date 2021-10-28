@extends('layouts.app')

@section('content')

            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Usuarios</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-primary">Agregar usuarios</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                                        </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
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
                        @foreach ($usuarios as $orden=>$users)
                    <tbody>
                        <tr>
                            <td>{{++$orden}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td> 
                <td>{{$users->Escolaridad}}</td> 
            @foreach ($users->roles as $role)
                <td>{{$role->name}}</td>    
            @endforeach
                <td>{{$users->created_at}}</td> 
                                   <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                         <form action="{{route("usuarios.destroy", $users->id)}}" method="POST"> 
                          @method("DELETE")
                            @csrf
                     <a class="dropdown-item" href="{{ route('usuarios.edit', $users->id ) }}">Editar</a>
                        <button class="dropdown-item" type="submit">Eliminar</button>
                            </form>
                        </div>
                      </div>
                    </td>
                        </tr>
                    </tbody>

                    @endforeach
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $usuarios->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection



