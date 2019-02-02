@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class=" justify-content-md-right">
            <b-col cols="5">
                <b-card bg-variant="dark" class="mt-5" text-variant="white" title="{{ ('Registrarse') }}" >
                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf
                        <b-form-group label="{{ __('Nombre') }}:"
                                      class="col-md-12 col-form-label text-md-left"
                                      label-for="name">
                            <b-form-input type="text"
                                          id="name"
                                          name="name"
                                          value="{{ old('name') }}" required autofocus
                                          placeholder="Andrés">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="{{ __('Correo Electrónico') }}:" class="col-md-12 col-form-label text-md-left" label-for="email">
                            <b-form-input type="email"
                                      id="email"
                                      name="email"
                                      value="{{ old('email') }}" required
                                      placeholder="example@example.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="{{ __('Contraseña') }}:" class="col-md-12 col-form-label text-md-left" label-for="password">
                            <b-form-input type="password"
                                          id="password"
                                          name="password"
                                          required >
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="{{ __('Confirmar Contraseña') }}:" class="col-md-12 col-form-label text-md-left" label-for="password_confirmation">
                            <b-form-input type="password"
                                          id="password_confirmation"
                                          name="password_confirmation"
                                          required >
                            </b-form-input>
                        </b-form-group>

                        <b-row align-h="between">
                            <b-col cols="5">
                                <b-button type="submit" variant="primary">
                                    {{ ('Confirmar') }}
                                </b-button>
                            </b-col>
                            <b-col cols="7">
                                <b-button class="" variant="link" href="{{ route('login') }}">
                                    {{ __('¿Ya estas registrado?') }}
                                </b-button>
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
              <img src="{{ asset('img/logo.png') }}" width="300" class="logo-r">
            </b-col>
        </b-row>
    </b-container>
@endsection