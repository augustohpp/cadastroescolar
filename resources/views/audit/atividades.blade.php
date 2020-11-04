@extends('layouts.master')
@section('content')

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="exemplo">
        <thead align="center">
            <tr>
                <th>ID do Usuário</th>
                <th>Nome</th>
                <th>Evento</th>
                <th>Data e Hora</th>
                <th>Tipo</th>
                <th>Mais Informações</th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($audits as $audit)
            <tr>
                <td>{{ $audit->user_id }}</td>
                
                <td>
                    @foreach ($users->where('id',$audit->user_id) as $user)
                        {{$user->name}}
                    @endforeach
                </td>
                
                <td>
                    @if ($audit->event == 'created')
                        Criou
                    @elseif ($audit->event == 'updated')
                        Atualizou
                    @else 
                        Deletou
                    @endif
                </td>

                @php
                    $horario = explode(" ", $audit->created_at);
                    $diamesano = explode("-", $horario[0]);
                    $horario[0] = $diamesano[2].'/'.$diamesano[1].'/'.$diamesano[0];
                @endphp
                <td>{{ $horario[0] }}<br>{{ $horario[1] }}</td>

                <td>{{ $audit->auditable_type }}</td>

                <td><a class="tooltipped btn-lg" href="atividades/{{$audit->id}}"><i class="fas fa-info-circle"></i></a></td>
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