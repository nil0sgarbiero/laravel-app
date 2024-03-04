<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel/Alpine JS Autocomplete Search</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-4">
        <div class="card ">
            <div class="card-header">
                <h3 class="text-center">Cadastro de Items </h3>
            </div>
            <div class="card-body">
            <x-autocomplete name="familia" label="Familia:"></x-autocomplete>
            <x-autocomplete name="gru_ctr_estoq" label="Grupo Controle de Estoque:"></x-autocomplete>
            </div>
        </div>
        <!-- Tabela começa aqui -->
        <div class="table-responsive mt-5" x-data="{ items: [] }" x-init="fetchDataTable()">
            <table class="table table-hover">
                <thead class="table-secondary">
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>U.M.</th>
                    <th>Aplicação</th>
                    <th>Controle de Estoque</th>
                    <th>Família</th>
                    <th>Nivel</th>
                    <th>Grupo</th>
                    <th>Sub-Grupo</th>
                    <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                <tbody x-ref="tableBody">
                <template x-for="item in items" :key="item.cod_item">
                    <tr>
                        <td class="align-middle" x-text="item.cod_item"></td>
                        <td class="align-middle" x-text="item.den_item"></td>
                        <td class="align-middle" x-text="item.cod_unid_med"></td>
                        <td class="align-middle" x-text="item.ies_tip_item"></td>
                        <td class="align-middle" x-text="item.gru_ctr_estoq"></td>
                        <td class="align-middle" x-text="item.cod_familia"></td>
                        <td class="align-middle" x-text="item.cod_lin_prod"></td>
                        <td class="align-middle" x-text="item.cod_lin_recei"></td>
                        <td class="align-middle" x-text="item.cod_seg_merc"></td>
                        <td class="align-middle" x-text="item.cod_cla_uso"></td>
                    </tr>
                </template>
                </tbody>
            </table>
        </div>
        <!-- Tabela termina aqui -->
    </div>
    </div>

<script src="{{ asset('js/autocomplete.js') }}"></script>
<script src="{{ asset('js/table_list.js') }}"></script>
</body>
</html>
