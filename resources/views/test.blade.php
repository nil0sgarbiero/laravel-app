<!DOCTYPE html>
<html>
<head>
    <title>Teste de Consultas</title>
</head>
<body>
<h1>Usuários do MySQL:</h1>
<ul>
    @foreach ($testes as $test)
        <li>{{ $test->test }}</li>
    @endforeach
</ul>

<h1>Funcionários do Oracle:</h1>
<ul>
    @foreach ($par_vdps as $par_vdp)
        <li>{{ $par_vdp->num_prx_pedido }}</li>
    @endforeach
</ul>
</body>
</html>
