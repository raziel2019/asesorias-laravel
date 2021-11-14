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
                            <h1 class="mb-0">Mis Datos</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                                        </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Profesion</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Email</th>
                                <th scope="col">Movil</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">ExpLab</th>
                                <th scope="col">Logros</th>
                                <th scope="col">Formación Academica</th>
                                <th scope="col">Aptitudes</th>
                                <th scope="col">Cursos</th>
                                <th scope="col">Perfil Profesor Cod</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($profesor as $orden=>$data)
                    <tbody>
                        <tr>
                            <td>{{$data->users->name}}</td>
                            <td>{{$data->profesiones->Descripcion}}</td>
                            <td>{{$data->paises->Descripcion}}</td>
                            <td>{{$data->users->email}}</td>
                            <td>{{$data->Movil}}</td>
                            <td>{{$data->Linkedin}}</td>
                            <td>{{$data->ExpeLaboral}}</td>
                            <td>{{$data->Logros}}</td>
                            <td>{{$data->FormacionAcademica}}</td>
                            <td>{{$data->Aptitudes}}</td>
                            <td>{{$data->Cursos}}</td>
                            <td>{{$data->PerfilProfesorcol}}</td>
                            <td>{{$data->created_at}}</td>
                           
                            <td>            
                                    <a class="btn btn-primary" href="{{ route('profesor.edit', $data->id ) }}">Editar</a>
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


