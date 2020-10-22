@extends('layouts.master')
@section('content')

<div class="card">
    <div class="container col-11">
        <table class="table table-hover" style="width:100%" id="exemplos">
            <thead>
                <th>
                    <div align="center">
                        <h1>Atividades do Usuário</h1>
                    </div>
                </th>
            </thead>
            <tbody class="mt-4">
                @foreach ($audits as $audit)
                    <tr>
                        <td>
                            <h4><u>@lang('article.'.$audit->event.'.metadata', $audit->getMetadata())</u></h4>

                            @foreach ($audit->getModified() as $attribute => $modified)
                                <ul>
                                    <li>@lang('article.'.$audit->event.'.modified.'.$attribute, $modified)</li>
                                </ul>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('#exemplos').DataTable({
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