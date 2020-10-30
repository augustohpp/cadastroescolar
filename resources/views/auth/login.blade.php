@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="form">
            <form method="POST" action="{{ route('login') }}" id="formLogin">
                @csrf
                <div class="input">
                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Senha">
                        </div>
                    </div>

                    <div class="remember-password ml-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label pt-2" for="remember">
                            {{ __('Lembrar senha') }}
                        </label>
                    </div>

                    <button type="submit">
                        {{ __('Entrar') }}
                    </button>
                </div>
                <div class="details">
                    @if (Route::has('password.request'))
                    <a class="forgot-password btn btn-link " href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('javascript2')
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\UserRequest','#formLogin' ) !!}
@endsection