<?php

namespace App\Models\DBF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESIT000 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pia_nivel';
    use HasFactory;

    protected $fillable = [
        'cod_nivel',
        'den_nivel',
    ];
}
