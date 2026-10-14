
@extends('layouts.app')

@section('content')
<style>
    body {
        background: #0b0b0e !important;
        color: #ffffff;
    }

    .login-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .login-card {
        width: 100%;
        max-width: 480px;
        background: #151519;
        border: 1px solid #303036;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.4);
    }

    .login-header {
        text-align: center;
        padding: 30px 25px;
        background: #1b1013;
        border-bottom: 1px solid #452027;
    }

    .login-header h2 {
        color: #ffffff;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .login-header h2 span {
        color: #ed263b;
    }

    .login-header p {
        color: #aaaab4;
        margin: 0;
    }

    .login-body {
        padding: 30px;
    }

    .login-body label {
        color: #e5e5e9;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .login-body .form-control {
        background: #222228;
        color: #ffffff;
        border: 1px solid #42424a;
        border-radius: 8px;
        padding: 12px;
    }

    .login-body .form-control:focus {
        background: #222228;
        color: #ffffff;
        border-color: #ed263b;
        box-shadow: 0 0 0 3px rgba(237, 38, 59, 0.15);
    }

    .login-body .form-control::placeholder {
        color: #92929d;
    }

    .login-body .form-check-label {
        color: #c7c7ce;
        font-weight: normal;
    }

    .login-body .form-check-input:checked {
        background-color: #ed263b;
        border-color: #ed263b;
    }

    .btn-login {
        width: 100%;
        background: #ed263b;
        color: #ffffff;
        border: 1px solid #ed263b;
        border-radius: 8px;
        padding: 12px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-login:hover {
        background: #c91d30;
        border-color: #c91d30;
        color: #ffffff;
        transform: translateY(-2px);
    }

    .forgot-link {
        display: block;
        text-align: center;
        color: #ff6574;
        margin-top: 20px;
        text-decoration: none;
    }

    .forgot-link:hover {
        color: #ffffff;
    }

    .login-footer {
        text-align: center;
        color: #777781;
        padding: 18px;
        border-top: 1px solid #303036;
        font-size: 13px;
    }
</style>

<div class="container login-container">
    <div class="login-card">

        <div class="login-header">
            <h2>✦ Lab<span>Laravel</span></h2>
            <p>Bienvenido de nuevo</p>
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email">Correo electrónico</label>

                    <input
                        id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Introduce tu correo"
                        required
                        autocomplete="email"
                        autofocus
                    >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password">Contraseña</label>

                    <input
                        id="password"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="Introduce tu contraseña"
                        required
                        autocomplete="current-password"
                    >

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >

                        <label class="form-check-label" for="remember">
                            Recordarme
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-login">
                    Iniciar sesión →
                </button>

                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </form>
        </div>

        <div class="login-footer">
            LabLaravel © 2026 | Acceso seguro
        </div>

    </div>
</div>
@endsection
