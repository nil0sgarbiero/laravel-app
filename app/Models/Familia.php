<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $connection = 'oracle';
    protected $table = 'familia';
    use HasFactory;

    protected $fillable = [
        'cod_empresa',
        'cod_familia',
        'den_familia',
        'cod_unid_med',
        'ies_tip_familia',
    ];
}
