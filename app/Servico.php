<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    
    protected $fillable =[
        'diagnostico',
        'descricao',
        'forma_pgto',
        'total',
        'pago',
        'veiculo_id',
    ];

}
