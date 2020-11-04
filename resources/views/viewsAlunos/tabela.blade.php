@extends('layouts.master')
@section('title','EXEMPLO')

@section('content')

<div class="col-4" id="toast" style="position: absolute; z-index: 999; top: 70px;">
    @if (session('success'))
        <div class="border border-primary rounded p-2" style="background: #f8f4f4"
            role="alert" aria-live="assertive" aria-atomic="true">
            <div class="border-bottom pb-1">
                <div class="rounded mr-2 bg-primary" style="width: 20px; height: 20px; float: left; clear: both"></div>
                <strong class="mr-auto">Sucesso!</strong>
                <button type="button" class="ml-2 mb-1 close" id="fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body pt-2">
                {{ session('success') }}
            </div>
        </div>
    @endif
</div>

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="exemplo">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Turma</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody align="center">
           @foreach ($alunos as $aluno)
            <tr>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->nome}} {{$aluno->sobrenome}}</td>
                <td>
                    @if ($aluno->turma != null)
                    {{$aluno->turma->turma}}
                    @else 
                    Não está matriculado
                    @endif
                </td>
                <td>
                    <a href="/alunos/info/{{$aluno->id}}" class="btn btn-info" >Info</a>
                    <a href="/alunos/editar/{{$aluno->id}}" class="btn btn-primary">Editar</a>
                    <a href="/alunos/delete/{{$aluno->id}}" data-confirm='sfhdgfhdfh' class="btn btn-danger">Deletar</a>
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

    $('#fechar').click(function(){
        $('#toast').fadeOut();
    });

    setTimeout(function(){
        $('#toast').fadeOut();
    },3000)

</script>
@endsection