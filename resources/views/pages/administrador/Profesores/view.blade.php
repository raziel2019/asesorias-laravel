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
                            <h1 class="mb-0">Profesores</h3>
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
                                <th scope="col">Usuarios ID</th>
                                <th scope="col">Profesion ID</th>
                                <th scope="col">Pais ID</th>
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
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>{{$profesores->id}}</td>
                            <td>{{$profesores->users->name}}</td>
                            <td>{{$profesores->profesiones->Descripcion}}</td>
                            <td>{{$profesores->paises->Descripcion}}</td>
                            <td>{{$profesores->email}}</td>
                            <td>{{$profesores->Movil}}</td>
                            <td>{{$profesores->Linkedin}}</td>
                            <td>{{$profesores->ExpeLaboral}}</td>
                            <td>{{$profesores->Logros}}</td>
                            <td>{{$profesores->FormacionAcademica}}</td>
                            <td>{{$profesores->Aptitudes}}</td>
                            <td>{{$profesores->Cursos}}</td>
                            <td>{{$profesores->PerfilProfesorcol}}</td>
                            <td>{{$profesores->created_at}}</td>

                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection


