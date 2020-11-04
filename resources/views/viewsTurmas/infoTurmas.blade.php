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
                        <a href="/alunos/info/{{ $aluno->id }}" class="btn btn-info">Info</a>
                        <a href="/alunos/editar/{{ $aluno->id }}" class="btn btn-primary">Editar</a>
                        <a href="/alunos/delete/{{ $aluno->id }}" class="btn btn-danger" data-confirm='a'>Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @php
            $pao = $turma->aluno->count();
            echo $pao;
        @endphp
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

<script>
    $(document).ready(function(){
        $('a[data-confirm]').click(function(ev){
            var href = $(this).attr('href');
            if(!$('#confirm-delete').length){
                $('body').append('<div class="modal fade" id="confirm-delete" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Você tem certeza?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza que deseja apagar os dados do aluno? Não é possível a recuperação dos dados.</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><a class="btn btn-danger" id="dataConfirmOk">Deletar</a></div></div></div></div>');
            };
            $('#dataConfirmOk').attr('href', href);
            $('#confirm-delete').modal({shown:true});
            return false;
        });
    });
</script>
@endsection