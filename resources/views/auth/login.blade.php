@extends('layouts.app')

@section('content')
<b-container>
    <b-row class=" justify-content-md-right">
        <b-col cols="7">
            <b-card  bg-variant="dark" text-variant="white" class="card-l" title="{{ ('Iniciar Sesión') }}" >
              <b-form method="POST" action="{{ route('login') }}">
                    @csrf
                        <b-form-group label="{{ __('Correo Electrónico') }}:" class="col-md-12 col-form-label text-md-left" label-for="email">
                            <b-form-input type="email"
                                          id="email"
                                          name="email"
                                          value="{{ old('email') }}" required autofocus
                                          placeholder="example@example.com">
                            </b-form-input>
                        </b-form-group>

                    <b-form-group label="{{ __('Contraseña') }}:" class="col-md-12 col-form-label text-md-left" label-for="password">
                        <b-form-input type="password"
                                      id="password"
                                      name="password"
                                      required>
                        </b-form-input>
                    </b-form-group>

                    <b-row align-h="between">
                        <b-col cols="6">
                            <b-button type="submit" variant="primary">
                                {{ ('Iniciar') }}
                            </b-button>
                        </b-col>
                        <b-col cols="6">
                            @if (Route::has('password.request'))
                                <b-button variant="link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvido su contraseña?') }}
                                </b-button>
                            @endif
                        </b-col>
                    </b-row>
                  </b-form>
                   @if ($errors->any())
                      <b-alert show variant="danger" class="mt-3">
                        <ul class="mb-0">
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </b-alert>
                   @endif
            </b-card>
        </b-col>
        <b-col cols="5">
            <img src="{{ asset('img/logo.png') }}" width="300" class="logo-l">
        </b-col>
    </b-row>
</b-container >
@endsection
