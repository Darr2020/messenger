<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
    <div id="app">
        <b-navbar toggleable type="dark" variant="dark">
        <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>
        <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav class="ml-auto">
                    <!-- Usuarios invitados -->
                    @guest
                        <b-nav-item href="{{ route('login') }}">{{ __('Ingresar') }}</b-nav-item>
                        @if (Route::has('register'))
                            <b-nav-item href="{{ route('register') }}">{{ __('Registro') }}</b-nav-item>
                        @endif
                        @else
                        <!-- Navbar dropdowns -->
                        <b-nav-item-dropdown text="Username" right>
                            <b-dropdown-item href="{{ route('logout') }}">Salir</b-dropdown-item>
                        </b-nav-item-dropdown>
                    @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
