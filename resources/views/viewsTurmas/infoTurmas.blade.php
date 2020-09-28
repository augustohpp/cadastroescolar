@extends('layouts.master')
@section('content')
<div class="container table-sm">
    <div class="row">
        <div class="col-sm infoTurmas">
            <span style="font-weight: bold">Turma:</span>
            {{$turma->turma}}
        </div>
        <div class="col-sm infoTurmas">
            <span style="font-weight: bold">Nível:</span>
            {{$turma->ano . ' ' . $turma->nivel}}
        </div>
        <div class="col-sm infoTurmas">
            <span style="font-weight: bold">Turno:</span>
            {{$turma->turno}}
        </div>
        <div class="col-sm infoTurmas">
            <span style="font-weight: bold">Vagas:</span>
            {{$turma->vagas}}
        </div>
        <div class="col-sm infoTurmas">
            <span style="font-weight: bold">Professor:</span>
            @if ($turma->professor_id != null)
                {{$turma->professor->nome}}
            @else
                <span>Sem Professor</span>
            @endif
        </div>
    </div>
</div>

    <div class="container mt-4 table-responsive-sm">
        <table class="table table-striped nowrap" style="width:100%" id="exemplo">
            <thead align="center">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($turma->aluno as $aluno)
                <tr>
                    <td> {{ $aluno->id }}</td>
                    <td> {{ $aluno->nome.' '.$aluno->sobrenome }}</td>
                    <td> {{ $aluno->email }}</td>

                    <td>
                        <a href="/alunos/info/{{ $aluno->id }}">Info</a>
                        <a href="/alunos/editar/{{ $aluno->id }}">Editar</a>
                        <a href="/alunos/delete/{{ $aluno->id }}">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script>
    $(document).ready(function () {
    $('#exemplo').DataTable({
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