@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div>
                <h2 class="mb-0">{{ __('Agregar Usuarios') }}</h2> 
                <h4 class="text-muted mb-4">{{ __('Ingrese datos del Usuarios') }}</h4>
            </div>
        </div>
                    <div class="card-body mt--5">
                        <form class="form-row " method="post" action="{{ route('usuarios.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            
    
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
        
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has(' Paterno   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __(' Paterno  ') }}</label>
                                <input type="text" name="Paterno" id="input-status" class="form-control form-control-alternative{{ $errors->has('Paterno ') ? ' is-invalid' : '' }}" placeholder="{{ __('Paterno ') }}" value="" required>
        
                                @if ($errors->has('Paterno  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Paterno  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Materno   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __(' Materno  ') }}</label>
                                <input type="text" name="Materno" id="input-status" class="form-control form-control-alternative{{ $errors->has('Materno ') ? ' is-invalid' : '' }}" placeholder="{{ __('Materno ') }}" value="" required>
        
                                @if ($errors->has('Materno  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Materno  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Sexo   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __(' Sexo  ') }}</label>
                                <input type="text" name="Sexo" id="input-status" class="form-control form-control-alternative{{ $errors->has('Sexo ') ? ' is-invalid' : '' }}" placeholder="{{ __('Sexo ') }}" value="" required>
        
                                @if ($errors->has('Sexo  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Sexo  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Escolaridad  ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __(' Escolaridad ') }}</label>
                                <input type="text" name="Escolaridad" id="input-status" class="form-control form-control-alternative{{ $errors->has('Escolaridad') ? ' is-invalid' : '' }}" placeholder="{{ __('Escolaridad') }}" value="" required>
        
                                @if ($errors->has('Escolaridad '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Escolaridad ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	email   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __('  	Email  ') }}</label>
                                <input type="email" name="email" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	email ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	email ') }}" value="" required>
        
                                @if ($errors->has(' 	email  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' 	email  ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	password   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __('  	Password  ') }}</label>
                                <input type="password" name="password" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	password ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	password ') }}" value="" required>
        
                                @if ($errors->has(' 	password  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' 	password  ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	role   ') ? ' has-danger' : '' }} col-md-6">
                                <label class="form-control-label" for="input-status">{{ __('  	Roles  ') }}</label>
                                <select name="nickname" id="" class="form-control form-control-alternative">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has(' 	Role  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' 	role  ') }}</strong>
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
        