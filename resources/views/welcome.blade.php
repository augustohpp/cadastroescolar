
@extends('layouts.master')
@section('title','EXEMPLO')
@section('content')

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top image2" src="{{ URL::to('/imagens/alunos.jpg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Alunos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('listaAluno') }}" class="btn btn-primary stretched-link">Ver Alunos</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top image2" src="{{ URL::to('/imagens/turmas.jpg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Turmas</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('listaTurma') }}" class="btn btn-primary stretched-link">Ver Turmas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top image2" src="{{ URL::to('/imagens/professores.jpg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Professores</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('listaProfessor') }}" class="btn btn-primary stretched-link">Ver Professores</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
