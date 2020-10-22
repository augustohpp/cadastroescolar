@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card">
                <div class="alert alert-success my-auto py-5" role="alert">
                    <h3 class="alert-heading">Usuário criado com sucesso!</h3>
                    <p>Agora que o um novo usuário ja foi cadastrado, você pode voltar para o <u><a href="/" class="alert-link">menu principal</a></u>.</p>
                    <hr>
                    <p class="mb-0">Ou se preferir, você pode <u><a href="{{ route('register') }}" class="alert-link">cadastrar outro usuário</a></u>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
