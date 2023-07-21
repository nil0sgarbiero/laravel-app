<?php

namespace App\Models\DBF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESIT002 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pia_sub_grupo';
    use HasFactory;

    protected $fillable = [
        'cod_nivel',
        'cod_grupo',
        'cod_sub_grupo',
        'den_sub_grupo',
    ];
}
