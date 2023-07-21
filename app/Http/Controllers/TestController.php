<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {
        // Consulta na tabela 'users' do MySQL
        $testes = DB::connection('mysql')->table('users')->get();

        // Consulta na tabela 'employees' do Oracle
        $par_vdps = DB::connection('oracle')->table('par_vdp')->get();

        $familia = Familia::where('cod_empresa','=','01')->get();
        //dd($par_vdps);
        // Faça algo com os resultados
        // Por exemplo, exiba os resultados em uma view
        return view('test', compact('testes', 'par_vdps','familia'));
    }

}
