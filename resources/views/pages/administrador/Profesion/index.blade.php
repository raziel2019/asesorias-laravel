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
                            <h3 class="mb-0">Profesiones</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('profesiones.create') }}" class="btn btn-sm btn-primary">Agregar profesiones</a>
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
                                <th scope="col">Fecha de Creación</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($profesiones as $orden=>$profesion)
                    <tbody>
                        <tr>
                            <td>{{++$orden}}</td>
                            <td>{{$profesion->Descripcion}}</td>
                            <td>{{$profesion->created_at}}</td> 
                            <td>           
                                <form action="{{route("profesiones.destroy", $profesion->id)}}" method="POST"> 
                                    @method("DELETE")
                                    @csrf
                                    <a class="btn btn-primary" href="{{ route('profesiones.edit', $profesion->id ) }}">Editar</a>
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
                        {{ $profesiones->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection



