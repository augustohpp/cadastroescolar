@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Trocar Senha') }}</div>
        <div class="form">
            <form method="POST" action="{{ route('password.update') }}" id="formReset">
            @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="input">
                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control"
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                autofocus placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="password" type="password"
                                class="form-control" name="password"
                                required autocomplete="new-password" placeholder="Senha">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirmar Senha">
                        </div>
                    </div>

                    <button type="submit">
                        {{ __('Trocar Senha') }}
                    </button>
                </div>
                <div class="details">
                    <p class="text-center"><a href="{{ route('listaUser') }}">Cancelar</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('javascript2')

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ResetPasswordRequest','#formReset' ) !!}

@endsection