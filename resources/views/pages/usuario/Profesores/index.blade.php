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
                    <div class="row">
                        @foreach ($profesores as $orden=>$data)
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Nombre: {{$data->users->name}}</h5>
                              <p class="card-text">Profesiones: {{ $data->profesiones->Descripcion}}</p>
                              <p class="card-text">Pais: {{$data->paises->Descripcion}}</p>
                              <p class="card-text">Cursos: {{$data->Cursos}}</p>
                              <a class="btn btn-primary" href="{{ route('ProfesoresDisponibles.edit', $data->id ) }}">Solicitar Asesoria</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>


                </div>

         
                
            </div>
        </div>
        
    </div>
    
</div>
@endsection


