<!DOCTYPE html>
<html>
<head>
    <title>Teste de Consultas</title>
</head>
<body>
<h1>Usuários do MySQL:</h1>
<ul>
    @foreach ($testes as $test)
        <li>{{ $test->name }}</li>
    @endforeach
</ul>

<h1>Funcionários do Oracle:</h1>
<ul>
    @foreach ($par_vdps as $par_vdp)
        <li>{{ $par_vdp->num_prx_pedido }}</li>
    @endforeach
</ul>

<h1>Familia do Oracle:</h1>
<ul>
    @foreach ($familia as $fam)
        <li>{{ $fam->cod_familia.' | '.$fam->den_familia.' | '.$fam->cod_unid_med.' | '.$fam->ies_tip_familia}}</li>
    @endforeach
</ul>

</body>
</html>
