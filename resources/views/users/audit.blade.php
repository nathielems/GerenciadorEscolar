@extends('layouts.master')
@section('title','Gerenciador Escolar - Auditoria')
@section('content')

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="auditoria">
        <thead align="left">
            <tr>
                <th>ID do usuário</th>
                <th>Evento</th>
                <th>ID de auditoria</th>
                <th>Tipo de auditoria</th>
                <th>Criado em</th>
                <th>Modificado em</th>
                <th>Endereço de IP</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($audits as $audit)
            <tr>
                <td>{{$audit->user_id}}</td>
                <td>{{$audit->event}}</td>
                <td>{{$audit->auditable_id}}</td>
                <td>{{$audit->auditable_type}}</td>
                <td>{{$audit->created_at}}</td>
                <td>{{$audit->updated_at}}</td>
                <td>{{$audit->ip_address}}</td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
    $('#auditoria').DataTable({
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