@extends('layouts.master')
@section('content')
    
<div class="card">
    <div class="card-header mb-3">
        <h2 class="col-12 modal-title text-center">Informações sobre {{$prof->nome}}</h2>
    </div>
    <div class="container col-11">
        <div class="row text-center">
            
            <div class="col-4 border">
                <h4 class="border-bottom  font-weight-bold">Nome do Aluno</h4>
                <p>{{$prof->nome}} {{$prof->sobrenome}}</p> 
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Sexo</h4>
                <p>{{$prof->sexo}}</p>
            </div>
        
            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Data de Nascimento</h4>
                <p>{{$prof->data_Nascimento}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Telefone</h4>
                <p>{{$prof->tel}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Telefone 2</h4>
                <p>{{$prof->tel2}}</p>
            </div>

            <div class="col-4 border">
                <h4 class="border-bottom font-weight-bold">Email</h4>
                <p>{{$prof->email}}</p>
            </div>
        </div>

        <div class="card-footer mt-3">
            <a class="btn btn-primary" href="/professores/editar/{{$prof->id}}">Editar Professor</a>
            <a class="btn btn-secondary" href="{{ route('listaProfessor')}} ">Voltar</a>
        </div>
        
    </div>
</div>

@endsection

