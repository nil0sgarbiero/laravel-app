<?php

namespace App\Models\DBF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESIT004 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pia_mod_item';
    use HasFactory;

    protected $fillable = [
        'cod_nivel',
        'cod_grupo',
        'cod_sub_grupo',
        'cod_tip_item',
        'cod_cat_item',
        'cod_mod_item',
        'cod_item',
        'den_mod_item',
    ];
}
