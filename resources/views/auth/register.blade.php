@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">

                    <div class="text-center">
                        <div class="card-profile-image mb-5">
                            <img  class="rounded-circle " src="{{ asset('imagenes/foto.jpg') }}" style="width:10em; height: 10em;">
                        </div>
                    </div>


                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4 mt-4">
                            <small style="font-size:17px"><strong>¡Forma parte de nuestra comunidad!</strong></small>
                            <br>
                            <small style="font-size:13px">{{ __('Tu información personal será usada para procesar tu orden') }}</small>
                        </div>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Nombre</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Paterno') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Apellido Paterno</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('Paterno') ? ' is-invalid' : '' }}" placeholder="{{ __('Paterno') }}" type="text" name="Paterno" value="{{ old('Paterno') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Materno') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Apellido Materno</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('Materno') ? ' is-invalid' : '' }}" placeholder="{{ __('Materno') }}" type="text" name="Materno" value="{{ old('Materno') }}" required autofocus>
                                </div>
                                @if ($errors->has('Materno'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('Materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Correo electrónico</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Sexo') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Sexo</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <select class="custom-select" name="Sexo">
                                        <option selected>Elija una opcion...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                      </select>                               </div>
                                @if ($errors->has('Sexo'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('Sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Escolaridad') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Escolaridad</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <select class="custom-select" name="Escolaridad">
                                        <option selected>Elija una opcion...</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="TSU">TSU</option>
                                        <option value="Bachillerato">Bachillerato</option>
                                      </select>                                     </div>
                                @if ($errors->has('Escolaridad'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('Escolaridad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('nickname') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Role</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <select class="custom-select" name="nickname">
                                        <option selected>Elija una opcion...</option>
                                        <option value="Usuario">Usuario</option>
                                        <option value="Profesor">Profesor</option>
                                      </select>
                                </div>
                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <small style="font-size: 12px">Contraseña</small>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <small style="font-size: 12px">Confirmar contraseña</small>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
