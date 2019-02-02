<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- ICON -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<style>
    .fa-cog, .fa-edit, .fa-sign-out-alt, .fa-user{
        color: #007BFF;
    }
    .logo-r{
        margin-top: 150px;
        margin-left: 200px;
    }
    .logo-l, .card-l{
        margin-top: 130px;
        margin-left: 100px;
    }
</style>

<body class="h-100">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div id="app" class="h-100">
        <b-navbar toggleable type="dark" variant="dark">
        <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>
        <b-navbar-brand text="primary" href="{{ url('/') }}">
            {{ config('app.name') }}
        </b-navbar-brand>
            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav class="ml-auto">
                    <!-- Usuarios invitados -->
                    @guest
                        <b-nav-item href="{{ route('login') }}">
                            {{ __('Sesión') }}
                            <i class="fas fa-user"></i>
                        </b-nav-item>
                        @if (Route::has('register'))
                            <b-nav-item href="{{ route('register') }}">{{ __('Registro') }}</b-nav-item>
                        @endif
                        @else
                        <!-- Navbar dropdowns -->
                        <b-nav-item-dropdown text="{{ auth()->user()->name }}" right>
                            <b-dropdown-item href="#" @click="logout">
                                Salir <i class="fas fa-sign-out-alt"></i>
                            </b-dropdown-item>
                        </b-nav-item-dropdown>
                    @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
            @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
