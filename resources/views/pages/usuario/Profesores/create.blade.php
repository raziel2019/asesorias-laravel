@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div>
                <h2 class="mb-0">{{ __('Solicitar Asesoria') }}</h2> 
                <h4 class="text-muted mb-4">{{ __('Ingrese datos de las asesorias') }}</h4>
            </div>
        </div>
                    <div class="card-body mt--5">
                        <form class="form-row " method="post" action="{{ route('ProfesoresDisponibles.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            
                            <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Usuarios') }}</label>
                                <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required>
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group{{ $errors->has('Nota del estudiante') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                                <input type="text" name="NombreEstudiante" id="NombreEstudiante" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre Estudiante') }}" value="" required>
        
                                @if ($errors->has('NombreEstudiante'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NombreEstudiante') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('Nota del estudiante') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Descripcion') }}</label>
                                <input type="text" name="Descripcion" id="Descripcion" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripcion') }}" value="" required>
        
                                @if ($errors->has('Descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Estatus') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Estatus') }}</label>
                                <select id="Estatus" name="Estatus" class="form-control @error('Estatus') is-invalid @enderror" >
                                    <option value="Pendiente">Pendiente</option>
                                  
                               </select>
                                @if ($errors->has('Estatus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Estatus') }}</strong>
                                    </span>
                                @endif
                            </div>                           
                            <div class="col-md-6 center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        @endsection
        