<?php

namespace App\Http\Controllers\MAN;

use App\Http\Controllers\Controller;
use App\Models\GrupoControleEstoque;
use Illuminate\Http\Request;

class GrupoControleEstoqueController extends Controller
{
    public function gruCtrEstoqJson(Request $request)
    {
        $result = GrupoControleEstoque::where('den_gru_ctr_estoq', 'LIKE',"%{$request->get('term')}%")->
        where('cod_empresa', '=','01')->get();
        $response= array();
        foreach($result as $gru_ctr_estoq) {
            $response[] = array("value"=>$gru_ctr_estoq->gru_ctr_estoq,"label"=>trim($gru_ctr_estoq->den_gru_ctr_estoq));
        }
        //dd($response);
        return response()->json($response);
    }
}
