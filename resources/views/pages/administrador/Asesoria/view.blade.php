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
                            <h1 class="mb-0">Asesoria de {{$asesoria->users->name}} </h3>
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
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha Asesoria</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>{{$asesoria->id}}</td>
                            <td>{{$asesoria->users->name}}</td>
                            <td>{{$asesoria->Descripcion}}</td>
                            <td>{{$asesoria->FechaAsesoria}}</td>
                            <td>{{$asesoria->Estatus}}</td>
                            <td>{{$asesoria->created_at}}</td>
                            <td>{{$asesoria->Link}}</td>

                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection


