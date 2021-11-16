@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7" style="">
    <div class="card bg-white shadow">
        <div class="card-header bg-white border-0">
            <div>
                <h2 class="mb-0">{{ __('Agregar Estudiante') }}</h2> 
                <h4 class="text-muted mb-4">{{ __('Ingrese datos del Estudiante') }}</h4>
            </div>
        </div>
                    <div class="card-body mt--5">
                        <form class="form-row " method="post" action="{{ route('estudiantes.store' ) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            
        
                            <div class="form-group{{ $errors->has('users_id') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Usuarios') }}</label>
                                <select id="users_id" name="users_id" class="form-control @error('user_id') is-invalid @enderror" required>
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('Edad') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Edad') }}</label>
                                <input type="number" name="Edad" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Edad') }}" value="" required>
        
                                @if ($errors->has('Edad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Intereses') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Intereses') }}</label>
                                <input type="text" name="Intereses" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Intereses') }}" value="" required>
        
                                @if ($errors->has('Intereses'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Intereses') }}</strong>
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
        