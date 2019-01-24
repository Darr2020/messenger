@extends('layouts.app')

@section('content')
<b-container>
    <b-row class=" justify-content-md-center">
        <b-col cols="8">
            <b-card  bg-variant="dark" text-variant="white" title="{{ ('Iniciar Sesión') }}" >
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf
                    <b-form-group label="Correo Electrónico:" class="col-md-12 col-form-label text-md-left" label-for="email">
                        <b-form-input type="email"
                                      id="email"
                                      name="email"
                                      class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                      value="{{ old('email') }}" required autofocus
                                      placeholder="example@example.com">
                        </b-form-input>
                        <b-col clos="6">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </b-col>
                    </b-form-group>

                    <b-form-group label="Contraseña:" class="col-md-12 col-form-label text-md-left" label-for="password">
                        <b-form-input type="password"
                                      id="password"
                                      name="password"
                                      class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                      required autofocus>
                        </b-form-input>
                        <b-col clos="6">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </b-col>
                    </b-form-group>

                    <b-row align-h="between">
                        <b-col cols="7">
                            <b-button type="submit" variant="primary">
                                {{ ('Iniciar') }}
                            </b-button>
                        </b-col>
                        <b-col cols="5">
                            @if (Route::has('password.request'))
                                <b-button variant="link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvido su contraseña?') }}
                                </b-button>
                            @endif
                        </b-col>
                    </b-row>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container >
@endsection
