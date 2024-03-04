<!DOCTYPE html>
<html>
<head>
    <title>Importar DBF</title>
</head>
<body>
<hr/>
<form action="{{ route('import-dbf') }}" method="POST">
    @csrf
    <label for="filename">Caminho do arquivo DBF:</label>
    <input type="text" name="filename" required><br>
    <hr/>
    &nbsp
    <label for="model_name">Nome do modelo no Laravel (namespace completo):</label>
    <input type="text" name="model_name" required><br>
    <button type="submit">Visualizar os registros antes da importação</button>
</form>
<hr/>
&nbsp
<form action="{{ route('update-cod-item') }}" method="POST">
    @csrf
    <button type="submit">Atualizar Campo cod_item</button>
</form>



</body>
</html>
