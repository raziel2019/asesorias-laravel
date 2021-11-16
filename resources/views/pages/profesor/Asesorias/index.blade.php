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
                            <h1 class="mb-0">Mis Asesorias</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                                        </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Profesor</th>
                                <th scope="col">NombreUsuario</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Link Asesoria </th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($asesoria as $orden=>$data)
                    <tbody>
                        <tr>
                            <td>{{auth()->user()->name}}</td>
                            <td>{{$data->NombreEstudiante}}</td>
                            <td>{{$data->Descripcion}}</td>
                            <td>{{$data->Estatus}}</td>
                            <td>{{$data->Link}}</td>           
                            <td>            
                                    <a class="btn btn-primary" href="{{ route('asesoria.edit', $data->id ) }}">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection


