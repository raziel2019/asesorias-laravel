@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>

<div class="container-fluid mt--7">
    <div class="row justify-content-center">
       <div class="col">
           <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h2 class="mb-0">Editar Datos</h2>
                    </div>
                </div>
            </div>
                    <div class="card-body mt--4">
                        <form class='form-row' action="{{ route('profesor.update',$profesor->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
    
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
        
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{auth()->user()->name}}"  disabled>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Profesion') }}</label>
                                <input type="text" name="Profesion_id" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Profesion') }}" value="{{$profesor->profesiones->Descripcion}}"  disabled>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Pais') }}</label>
                                <input type="text" name="Pais_id" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Profesion') }}" value="{{$profesor->paises->Descripcion}}"  disabled>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Email') }}</label>
                                <input type="text" name="Email" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{auth()->user()->email}}"  disabled>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Movil') }}</label>
                                <input type="text" name="Movil" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Movil') }}" value="{{$profesor->Movil}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Linkedin') }}</label>
                                <input type="text" name="Linkedin" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Linkedin') }}" value="{{$profesor->Linkedin}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('ExpeLaboral') }}</label>
                                <input type="text" name="ExpeLaboral" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('ExpeLaboral') }}" value="{{$profesor->ExpeLaboral}}" required>
    
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Logros') }}</label>
                                <input type="text" name="Logros" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Logros') }}" value="{{$profesor->Logros}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('FormacionAcademica') }}</label>
                                <input type="text" name="FormacionAcademica" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('FormacionAcademica') }}" value="{{$profesor->FormacionAcademica}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Aptitudes') }}</label>
                                <input type="text" name="Aptitudes" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Aptitudes') }}" value="{{$profesor->Aptitudes}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Cursos') }}</label>
                                <input type="text" name="Cursos" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Cursos') }}" value="{{$profesor->Cursos}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('PerfilProfesorcol') }}</label>
                                <input type="text" name="PerfilProfesorcol" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('PerfilProfesorcol') }}" value="{{$profesor->PerfilProfesorcol}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
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
        