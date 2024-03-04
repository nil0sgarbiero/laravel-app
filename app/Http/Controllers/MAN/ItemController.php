<?php

namespace App\Http\Controllers\MAN;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
//'cod_empresa','cod_item','den_item','cod_unid_med','ies_tip_item','gru_ctr_estoq',
//'cod_familia','cod_lin_prod','cod_lin_recei','cod_seg_merc','cod_cla_uso','ies_situacao',
    public function itemJson(Request $request)
    {
        $query = Item::where('ies_situacao', 'A')
            ->where('cod_empresa', '01');

        $query->when($request->get('den_item'), function ($query, $den_item) {
            return $query->where('den_item', 'LIKE', '%' . $den_item . '%');
        });
        $query->when($request->get('cod_item'), function ($query, $cod_item) {
            return $query->where('cod_item', '=', $cod_item);
        });
        $query->when($request->get('cod_familia'), function ($query, $cod_familia) {
            return $query->where('cod_familia', '=', $cod_familia);
        });
        $query->when($request->get('gru_ctr_estoq'), function ($query, $gru_ctr_estoq) {
            return $query->where('gru_ctr_estoq', '=', $gru_ctr_estoq);
        });
        $query->when($request->get('cod_lin_prod'), function ($query, $cod_lin_prod) {
            return $query->where('cod_lin_prod', '=', $cod_lin_prod);
        });
        $query->when($request->get('cod_lin_recei'), function ($query, $cod_lin_recei) {
            return $query->where('cod_lin_recei', '=', $cod_lin_recei);
        });
        $query->when($request->get('cod_seg_merc'), function ($query, $cod_seg_merc) {
            return $query->where('cod_seg_merc', '=', $cod_seg_merc);
        });
        $query->when($request->get('cod_cla_uso'), function ($query, $cod_cla_uso) {
            return $query->where('cod_cla_uso', '=', $cod_cla_uso);
        });
        $query->take(1000); // Limita o resultado a 1000 registros
        $result = $query->get();
        $response= array();
        foreach($result as $item) {
            $response[] = array("cod_item"=>$item->cod_item,
                                "den_item"=>trim($item->den_item),
                                "cod_unid_med"=>$item->cod_unid_med,
                                "ies_tip_item"=>$item->ies_tip_item,
                                "gru_ctr_estoq"=>$item->gru_ctr_estoq,
                                "cod_familia"=>$item->cod_familia,
                                "cod_lin_prod"=>$item->cod_lin_prod,
                                "cod_lin_recei"=>$item->cod_lin_recei,
                                "cod_seg_merc"=>$item->cod_seg_merc,
                                "cod_cla_uso"=>$item->cod_cla_uso,
            );
        }
        //dd($response);
        return response()->json($response);
    }
}
