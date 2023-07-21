<!DOCTYPE html>
<html>
<head>
    <title>Visualização dos registros</title>
</head>
<body>
<h2>Campos do modelo {{ $modelName }}</h2>
<ul>
    @foreach ($modelInstance->getFillable() as $field)
        <li>{{ $field }}</li>
    @endforeach
</ul>

@if ($records)
    <form action="{{ route('import-dbf-insert', $modelName) }}" method="POST">
        @csrf
        <button type="submit">Inserir registros no banco de dados</button>
    </form>
    <hr/>
    <form action="{{ route('import-dbf-batch') }}" method="POST">
        @csrf
        <button type="submit">Inclusão em Batch</button>
    </form>
@endif

@if ($modelInstance->count() > 0)
    <!-- Mostrar outros conteúdos relevantes ou botões adicionais, se necessário -->
@else
    <p>O modelo {{ $modelName }} não contém registros.</p>
@endif

<br>
<a href="{{ route('import-dbf') }}">Voltar</a>
<h2>Registros do arquivo DBF</h2>
<table>
    <thead>
    <tr>
        @foreach ($columns as $column)
            <th>{{ $column->getName() }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach ($records as $record)
        <tr>
            @foreach ($record as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>

<h2>Campos do modelo {{ $modelName }}</h2>
<ul>
    @foreach ($modelInstance->getFillable() as $field)
        <li>{{ $field }}</li>
    @endforeach
</ul>

@if ($records)
    <form action="{{ route('import-dbf-insert', $modelName) }}" method="POST">
        @csrf
        <button type="submit">Inserir registros no banco de dados</button>
    </form>
    <hr/>
    <form action="{{ route('import-dbf-batch') }}" method="POST">
        @csrf
        <button type="submit">Inclusão em Batch</button>
    </form>
@endif

@if ($modelInstance->count() > 0)
    <!-- Mostrar outros conteúdos relevantes ou botões adicionais, se necessário -->
@else
    <p>O modelo {{ $modelName }} não contém registros.</p>
@endif

<br>
<a href="{{ route('import-dbf') }}">Voltar</a>
</body>
</html>
