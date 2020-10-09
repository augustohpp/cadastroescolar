@extends('layouts.master')
@section('content')
    
<div class="card">
    <div class="card-header mb-3">
        <h2 class="col-12 modal-title text-center">Informações sobre {{$alunos->nome}}</h2>
    </div>
    <div class="container col-11">
        <div class="row text-center">

            <div class="col-6 border">
                <h4 class="border-bottom  font-weight-bold">Nome do Aluno</h4>
                <p>{{$alunos->nome}} {{$alunos->sobrenome}}</p> 
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom  font-weight-bold">Turma do Aluno</h4> 
                <p>{{$alunos->turma->turma}}</p>
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Sexo</h4>
                <p>{{$alunos->sexo}}</p>
            </div>
        
            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Data de Nascimento</h4>
                <p>{{$alunos->data_Nascimento}}</p>
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">CEP</h4>
                @if ($alunos->endereco->cep != null)
                    <p>{{$alunos->endereco->cep}}</p>
                @else
                    <p>Sem Cep</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Cidade</h4>
                @if ($alunos->endereco->cidade != null)
                    <p>{{$alunos->endereco->cidade}}</p>
                @else
                    <p>Sem Cidade</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Bairro</h4>
                @if ($alunos->endereco->bairro != null)
                    <p>{{$alunos->endereco->bairro}}</p>
                @else
                    <p>Sem bairro</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Rua</h4>
                @if ($alunos->endereco->rua != null)
                    <p>{{$alunos->endereco->rua}}</p>
                @else
                    <p>Sem rua</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Número</h4>
                @if ($alunos->endereco->cep != null)
                    <p>{{$alunos->endereco->cep}}</p>
                @else
                    <p>Sem número</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Complemento</h4>
                @if ($alunos->endereco->complemento != null)
                    <p>{{$alunos->endereco->complemento}}</p>
                @else
                    <p>Sem complemento</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Telefone</h4>
                @if ($alunos->tel != null)
                    <p>{{$alunos->tel}}</p>
                @else
                    <p>Sem telefone</p>
                @endif
            </div>

            <div class="col-6 border">
                <h4 class="border-bottom font-weight-bold">Telefone 2</h4>
                @if ($alunos->tel2 != null)
                    <p>{{$alunos->tel2}}</p>
                @else
                    <p>Sem telefone</p>
                @endif
            </div>

            <div class="col-6 border">
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
