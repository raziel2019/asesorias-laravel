@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div>
                <h2 class="mb-0">{{ __('Agregar Profesor') }}</h2> 
                <h4 class="text-muted mb-4">{{ __('Ingrese datos del Profesor') }}</h4>
            </div>
        </div>
                    <div class="card-body mt--5">
                        <form class="form-row " method="post" action="{{ route('profesores.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            
        
                            <div class="form-group{{ $errors->has('Usuarios_id') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Usuarios') }}</label>
                                <select id="Usuarios_id" name="Usuarios_id" class="form-control @error('Usuarios_id') is-invalid @enderror" required>
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('Profesion_id') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Profesiones') }}</label>
                                <select id="Profesion_id" name="Profesion_id" class="form-control @error('Profesion_id') is-invalid @enderror" required>
                                    @foreach ($profesiones as $profesion)
                                        <option value="{{$profesion->id}}">{{$profesion->Descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('Pais_id') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Paises') }}</label>
                                <select id="Pais_id" name="Pais_id" class="form-control @error('Pais_id') is-invalid @enderror" required>
                                    @foreach ($paises as $pais)
                                        <option value="{{$pais->id}}">{{$pais->Descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('Email') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Email') }}</label>
                                <input type="text" name="Email" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="" required>
        
                                @if ($errors->has('Email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Movil') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Movil') }}</label>
                                <input type="text" name="Movil" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Movil') }}" value="" required>
        
                                @if ($errors->has('Movil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Movil') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Linkedin') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Linkedin') }}</label>
                                <input type="text" name="Linkedin" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Linkedin') }}" value="" required>
        
                                @if ($errors->has('Linkedin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Linkedin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('ExpeLaboral') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('ExpeLaboral') }}</label>
                                <input type="text" name="ExpeLaboral" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('ExpeLaboral') }}" value="" required>
        
                                @if ($errors->has('ExpeLaboral'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ExpeLaboral') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Logros') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Logros') }}</label>
                                <input type="text" name="Logros" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Logros') }}" value="" required>
        
                                @if ($errors->has('Logros'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Logros') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('FormacionAcademica') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('FormacionAcademica') }}</label>
                                <input type="text" name="FormacionAcademica" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('FormacionAcademica') }}" value="" required>
        
                                @if ($errors->has('FormacionAcademica'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('FormacionAcademica') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Aptitudes') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Aptitudes') }}</label>
                                <input type="text" name="Aptitudes" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Aptitudes') }}" value="" required>
        
                                @if ($errors->has('Aptitudes'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Aptitudes') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Cursos') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Cursos') }}</label>
                                <input type="text" name="Cursos" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Cursos') }}" value="" required>
        
                                @if ($errors->has('Cursos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Cursos') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('PerfilProfesorcol') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('PerfilProfesorcol') }}</label>
                                <input type="text" name="PerfilProfesorcol" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('PerfilProfesorcol') }}" value="" required>
        
                                @if ($errors->has('PerfilProfesorcol'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('PerfilProfesorcol') }}</strong>
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
        