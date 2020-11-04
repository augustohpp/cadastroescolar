@extends('layouts.master')
@if (Gate::denies('create-users'))
@section('content')
<div class="container">
    <div class="card" align="center">
        <div class="card-header">
            <h2>{{ __('Criar Usuário') }}</h2>
        </div>
        <div class="form">
            <form method="POST" action="{{ route('register') }}" id="formRegister">
                @csrf
                <div class="input">
                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="name" type="text" class="form-control" name="name"
                                value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nome">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input type="text" name="cpf" id="cpf" class="form-control"
                                placeholder="CPF" maxlength="14" data-mask="000.000.000-00">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="password" type="password" class="form-control"
                                name="password" required autocomplete="current-password" placeholder="Senha">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                autocomplete="new-password" placeholder="Confirmar senha">
                        </div>
                    </div>

                    @if(Gate::allows('define-categ'))
                    <div class="form-group col-6">
                        <div class="input-group">
                            <select name="categoria" id="categoria" class="form-control" required>
                                <option value="3" disabled selected>Categoria</option>
                                <option value="1">Técnico de TI</option>
                                <option value="2">Gestor do Sistema</option>
                                <option value="3">Operador</option>
                            </select>
                        </div>
                    </div>
                    @else
                    <div class="input-group">
                            <select name="categoria" id="categoria" class="form-control" hidden required>
                                <option value="3">Operador</option>
                            </select>
                        </div>
                    @endif

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-1">Salvar</button>
                        <a class="btn btn-secondary ml-1" href="{{ url()->previous() }}">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@else
@section('content')
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oh não!</h4>
        <p>Parece que você não tem permissão para acessar esta página.</p>
        <hr>
        <p class="mb-0">Clique neste <a href=" {{ url()->previous() }}">link</a> e volte para a página anterior.</p>
    </div>
@endsection
@endif

@section('javascript')

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\UserRequest','#formRegister' ) !!}

@endsection