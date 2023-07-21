<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoControleEstoque extends Model
{
    protected $connection = 'oracle';
    protected $table = 'grupo_ctr_estoq';
    use HasFactory;
    protected $fillable = [
        'cod_empresa',
        'gru_ctr_estoq',
        'den_gru_ctr_estoq',
    ];
}
