<?php

namespace App\Models\DBF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESIT003 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pia_tip_item';
    use HasFactory;

    protected $fillable = [
        'cod_nivel',
        'cod_grupo',
        'cod_sub_grupo',
        'cod_tip_item',
        'den_tip_item',
    ];
}
