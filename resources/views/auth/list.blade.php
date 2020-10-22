{{-- @foreach ($users as $tecTi)
    @if ($tecTi->categoria == 3)
        {{$tecTi->name}}
        <hr>
    @endif
@endforeach --}}

@extends('layouts.master')
@section('title','EXEMPLO')
@section('content')

<div class="container-fluid no-padding table-responsive-sm">
    
</div>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Técnicos de TI
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-striped nowrap mx-auto" style="width:70%" id="exemplo">
                    <h2 align="center">Técnicos de TI</h2>
                    <thead align="center">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($users as $tecTi)
                        @if($tecTi->categoria == 1)
                            <tr>
                                <td>{{$tecTi->name}}</td>
                                <td>{{$tecTi->email}}</td>
                                <td>
                                    @if(Gate::allows('define-categ'))
                                    <a href="/usuarios/delete/{{$tecTi->id}}" class="btn btn-danger">Deletar</a>
                                    @endif
                                    <a href="/usuarios/auditoria/{{$tecTi->id}}" class="btn btn-info">Atividade</a>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Gestores do Sistema
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-striped nowrap mx-auto" style="width:70%" id="exemplo">
                    <h2 align="center">Gestores do sistema</h2>
                    <thead align="center">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($users as $gestor)
                        @if($gestor->categoria == 2)
                            <tr>
                                <td>{{$gestor->name}}</td>
                                <td>{{$gestor->email}}</td>
                                <td>
                                    @if(Gate::allows('define-categ'))
                                    <a href="/usuarios/delete/{{$gestor->id}}" class="btn btn-danger">Deletar</a>
                                    @endif
                                    <a href="/usuarios/auditoria/{{$gestor->id}}" class="btn btn-info">Atividade</a>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Operadores
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-striped nowrap mx-auto" style="width:70%" id="example">
                    <h2 align="center">Operadores</h2>
                    <thead align="center">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($users as $operadores)
                            @if($operadores->categoria == 3)
                                <tr>
                                    <td>{{$operadores->name}}</td>
                                    <td>{{$operadores->email}}</td>
                                    <td>
                                        <a href="/usuarios/delete/{{$operadores->id}}" class="btn btn-danger">Deletar</a>
                                        <a href="/usuarios/auditoria/{{$operadores->id}}" class="btn btn-info">Atividade</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('#example').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
@endsection