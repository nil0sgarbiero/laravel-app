<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $connection = 'oracle';
    protected $table = 'item';
    use HasFactory;

    protected $fillable = [
        'cod_empresa',
        'cod_item',
        'den_item',
        'cod_unid_med',
        'ies_tip_item',
        'gru_ctr_estoq',
        'cod_familia',
        'cod_lin_prod',
        'cod_lin_recei',
        'cod_seg_merc',
        'cod_cla_uso',
        'ies_situacao',
    ];
}
