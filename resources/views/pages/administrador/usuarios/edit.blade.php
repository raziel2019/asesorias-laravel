@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Editar Usuarios</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.update',$usuarios->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
    
                            <h6 class="heading-small text-muted mb-4">{{ __('Ingrese datos del Usuarios') }}</h6>
    
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
        
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{$usuarios->name}}" required>
        
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has(' Paterno   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __(' Paterno  ') }}</label>
                                <input type="text" name="Paterno" id="input-status" class="form-control form-control-alternative{{ $errors->has('Paterno ') ? ' is-invalid' : '' }}" placeholder="{{ __('Paterno ') }}" value="{{$usuarios->Paterno}}">
        
                                @if ($errors->has('Paterno  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Paterno  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Materno   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __(' Materno  ') }}</label>
                                <input type="text" name="Materno" id="input-status" class="form-control form-control-alternative{{ $errors->has('Materno ') ? ' is-invalid' : '' }}" placeholder="{{ __('Materno ') }}" value="{{$usuarios->Materno}}">
        
                                @if ($errors->has('Materno  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Materno  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Sexo   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __(' Sexo  ') }}</label>
                                <input type="text" name="Sexo" id="input-status" class="form-control form-control-alternative{{ $errors->has('Sexo ') ? ' is-invalid' : '' }}" placeholder="{{ __('Sexo ') }}" value="{{$usuarios->Sexo}}" required>
        
                                @if ($errors->has('Sexo  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Sexo  ') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has(' Escolaridad  ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __(' Escolaridad ') }}</label>
                                <input type="text" name="Escolaridad" id="input-status" class="form-control form-control-alternative{{ $errors->has('Escolaridad') ? ' is-invalid' : '' }}" placeholder="{{ __('Escolaridad') }}" value="{{$usuarios->Escolaridad}}" required>
        
                                @if ($errors->has('Escolaridad '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Escolaridad ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	email   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __('  	Email  ') }}</label>
                                <input type="email" name="email" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	email ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	email ') }}" value="{{$usuarios->email}}" >
        
                                @if ($errors->has(' 	email  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' 	email  ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	password   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __('  	Password  ') }}</label>
                                <input type="password" name="password" id="input-status" class="form-control form-control-alternative{{ $errors->has(' 	password ') ? ' is-invalid' : '' }}" placeholder="{{ __(' 	password ') }}" value="{{$usuarios->password}}">
        
                                @if ($errors->has(' 	password  '))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' 	password  ') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                            <div class="form-group{{ $errors->has('  	role   ') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-status">{{ __('  	Roles  ') }}</label>
                                <select name="rol" id="" class="form-control">
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
        