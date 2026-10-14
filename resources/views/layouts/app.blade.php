
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LabLaravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        html, body, #app {
            min-height: 100%;
        }

        body {
            background: #0b0b0e !important;
            color: #f5f5f5 !important;
        }

        .navbar {
            background: #111114 !important;
            border-bottom: 1px solid #303036;
        }

        .navbar .navbar-brand {
            color: #ed263b !important;
            font-weight: bold;
        }

        .navbar .nav-link {
            color: #ffffff !important;
        }

        .navbar .nav-link:hover {
            color: #ed263b !important;
        }

        .navbar .navbar-toggler {
            border-color: #ed263b;
        }

        .navbar .navbar-toggler-icon {
            filter: invert(1);
        }

        main {
            background: #0b0b0e;
            min-height: 85vh;
        }

        .card {
            background: #151519 !important;
            color: #ffffff !important;
            border: 1px solid #303036 !important;
            border-radius: 14px;
            overflow: hidden;
        }

        .card-header {
            background: #1b1013 !important;
            color: #ffffff !important;
            border-bottom: 1px solid #452027 !important;
        }

        .card-body {
            background: #151519 !important;
            color: #ffffff !important;
        }

        .form-label,
        label {
            color: #e5e5e9;
        }

        .form-control,
        .form-select {
            background-color: #222228 !important;
            color: #ffffff !important;
            border: 1px solid #42424a !important;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ed263b !important;
            box-shadow: 0 0 0 0.2rem rgba(237, 38, 59, 0.2) !important;
        }

        .form-control::placeholder {
            color: #aaaaB4 !important;
        }

        .form-check-label {
            color: #dddddd;
        }

        .form-check-input:checked {
            background-color: #ed263b !important;
            border-color: #ed263b !important;
        }

        .btn-primary {
            background-color: #ed263b !important;
            border-color: #ed263b !important;
            color: #ffffff !important;
        }

        .btn-primary:hover {
            background-color: #c91d30 !important;
            border-color: #c91d30 !important;
        }

        .btn-link {
            color: #ff6574 !important;
        }

        .dropdown-menu {
            background: #1b1b21 !important;
            border: 1px solid #303036 !important;
        }

        .dropdown-item {
            color: #ffffff !important;
        }

        .dropdown-item:hover {
            background: #ed263b !important;
            color: #ffffff !important;
        }

        .text-muted {
            color: #b5b5bf !important;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ✦ LabLaravel
                </a>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto"></ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Iniciar sesión
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        Registrarse
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>

                                    <form id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
