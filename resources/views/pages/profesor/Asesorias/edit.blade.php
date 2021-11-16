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
                        <h2 class="mb-0">Editar Asesoria</h2>
                    </div>
                </div>
            </div>
                    <div class="card-body mt--4">
                        <form class='form-row' action="{{ route('asesoria.update',$asesoria->id ) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="form-control-label" for="input-status">{{ __('Descripcion') }}</label>
                                <input type="text" name="Descripcion" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripcion') }}" value="{{$asesoria->Descripcion}}" required>
        
                                @if ($errors->has('Descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('FechaAsesoria') }}</label>
                                <input type="text" name="FechaAsesoria" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('FechaAsesoria') }}" value="{{$asesoria->FechaAsesoria}}" required>
        
                                @if ($errors->has('FechaAsesoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('FechaAsesoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Estatus') }}</label>
                                <select id="Estatus" name="Estatus" class="form-control @error('Estatus') is-invalid @enderror" required>
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Cancelado">Cancelado</option>
                                    <option value="Aceptado">Aceptado</option>
                               </select>
                                @if ($errors->has('Estatus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Estatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Link') ? ' has-danger' : '' }} col-md-12">
                                <label class="form-control-label" for="input-status">{{ __('Links') }}</label>
                                <select id="Link" name="Link" class="form-control @error('Link') is-invalid @enderror" required>
                                        <option value="https://meet.google.com/sun-uxar-ajy">Contabilidad - https://meet.google.com/sun-uxar-ajy</option>
                                        <option value="https://meet.google.com/reg-tcft-sxp">Psicologia - https://meet.google.com/reg-tcft-sxp</option>
                                        <option value="https://meet.google.com/jdy-jhsr-xiq">Ingenieria Industrial - https://meet.google.com/jdy-jhsr-xiq</option>
                                        <option value="https://meet.google.com/ruq-tjkc-muj">Informatica - https://meet.google.com/ruq-tjkc-muj</option>
                                    </select>
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
