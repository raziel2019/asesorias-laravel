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
                        <h2 class="mb-0">Editar Estudiante</h2>
                    </div>
                </div>
            </div>
                    <div class="card-body mt--4">
                        <form class='form-row' action="{{ route('estudiantes.update',$Estudiantes->id ) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="form-control-label" for="input-status">{{ __('Edad') }}</label>
                                <input type="number" name="Edad" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Edad') }}" value="{{$Estudiantes->Edad}}" required>
        
                                @if ($errors->has('Edad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Intereses') }}</label>
                                <input type="text" name="Intereses" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Intereses') }}" value="{{$Estudiantes->Intereses}}" required>
        
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
        