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
                            <h1 class="mb-0">Estudiantes</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('estudiantes.create') }}" class="btn btn-sm btn-primary">Agregar Estudiantes</a>
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
                                <th scope="col">Estudiante</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Intereses</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($Estudiantes as $orden=>$data)
                    <tbody>
                        <tr>
                            <td>{{++$orden}}</td>
                            <td>{{$data->users->name}}</td>
                            <td>{{$data->Edad}}</td>
                            <td>{{$data->Intereses}}</td>
                            <td>{{$data->created_at}}</td>
                           
                            <td>                   
                                <form action="{{route("estudiantes.destroy", $data->id)}}" method="POST"> 
                                    @method("DELETE")
                                    @csrf
                                    <a class="btn btn-primary" href="{{ route('estudiantes.edit', $data->id ) }}">Editar</a>
                                    <button class="btn btn-secondary" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $Estudiantes->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection


