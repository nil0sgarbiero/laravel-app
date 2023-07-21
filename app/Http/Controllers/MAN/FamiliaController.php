<?php

namespace App\Http\Controllers\MAN;

use App\Http\Controllers\Controller;
use App\Models\Familia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamiliaController extends Controller
{

    public function familiaJson(Request $request)
    {
        //$search = $request->get('term');
        $result = Familia::where('den_familia', 'LIKE',"%{$request->get('term')}%")->
            where('cod_empresa', '=','01')->get();

        //dump($request);
        $response= array();
        foreach($result as $familia) {
            $response[] = array("value"=>$familia->cod_familia,"label"=>trim($familia->den_familia),"un"=>$familia->cod_unid_med,"tip"=>$familia->ies_tip_familia);
        }
        //dd($response);
        return response()->json($response);
    }

}
