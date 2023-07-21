<!DOCTYPE html>
<html>
<head>
    <title>Importar DBF (Lote)</title>
</head>
<body>
<h2>Registros do lote {{ $startRecord }} a {{ $endRecord }} de {{ $totalCount }}</h2>
<table>
    <thead>
    <tr>
        @foreach ($batch[0] as $key => $value)
            <th>{{ $key }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach ($batch as $record)
        <tr>
            @foreach ($record as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>

</table>
<form action="{{ route('import-dbf-insert-batch') }}" method="POST">
    @csrf
    <input type="hidden" name="batchNumber" value="{{ $batchNumber }}">
    <button type="submit">Inserir este lote</button>
</form>
<form action="{{ route('import-dbf-skip-batch') }}" method="POST">
    @csrf
    <input type="hidden" name="batchNumber" value="{{ $batchNumber }}">
    <button type="submit">Pular este lote e continuar</button>
</form>
</body>
</html>
