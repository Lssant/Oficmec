<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PecaServico extends Model
{
    protected $fillable = [
        'peca_id',
        'servico_id',
        'valor_un',
        'quantidade'
    ];
}
