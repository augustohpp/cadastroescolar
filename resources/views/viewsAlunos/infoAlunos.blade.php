@extends('layouts.master')
@section('content')
    
<div class="card">
    <div class="card-header mb-3">
        <h2 class="col-12 modal-title text-center">Informações sobre {{$alunos->nome}}</h2>
    </div>
    <div class="container col-11">
        <div class="row text-center">
            
            <div class="col-4 border">
                <h4 class="border-bottom  font-weight-bold">Nome do Aluno</h4>
                <p>{{$alunos->nome}} {{$alunos->sobrenome}}</p> 
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Sexo</h4>
                <p>{{$alunos->sexo}}</p>
            </div>
        
            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Data de Nascimento</h4>
                <p>{{$alunos->data_Nascimento}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">CEP</h4>
                <p>{{$alunos->endereco->cep}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Cidade</h4>
                <p>{{$alunos->endereco->cidade}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Bairro</h4>
                <p>{{$alunos->endereco->bairro}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Rua</h4>
                <p>{{$alunos->endereco->rua}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Número</h4>
                <p>{{$alunos->endereco->numero}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Complemento</h4>
                <p>{{$alunos->endereco->complemento}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Telefone</h4>
                <p>{{$alunos->tel}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Telefone 2</h4>
                <p>{{$alunos->tel2}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Email</h4>
                <p>{{$alunos->email}}</p>
            </div>
        </div>

        <div class="card-footer mt-3">
            <a class="btn btn-primary" href="/alunos/editar/{{$alunos->id}}">Editar Aluno</a>
            <a class="btn btn-secondary" href="{{ route('listaAluno')}} ">Voltar</a>
        </div>
        
    </div>
</div>

@endsection
