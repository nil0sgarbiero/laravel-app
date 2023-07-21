<?php

namespace App\Models\DBF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESIT001 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pia_grupo';
    use HasFactory;

    protected $fillable = [
        'cod_nivel',
        'cod_grupo',
        'den_grupo',
    ];
}
