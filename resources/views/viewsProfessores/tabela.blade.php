@extends('layouts.master')
@section('title','EXEMPLO')
@section('content')

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="exemplo">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody align="center">
           @foreach ($prof as $prof)
            <tr>
                <td>{{ $prof->id }}</td>
                <td>{{ $prof->nome }}</td>
                <td>{{ $prof->sobrenome }}</td>

                <td>
                    <a href="/professores/info/{{ $prof->id }}" class="btn btn-info">Info</a>
                    <a href="/professores/editar/{{ $prof->id }}" class="btn btn-primary">Editar</a>
                    <a href="/professores/delete/{{ $prof->id }}" data-confirm='Tem certeza que deseja excluir o item selecionado?' class="btn btn-danger">Deletar</a>
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