<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable =[
        
        'descricao',
        'valor',
        'servico_id',
    ];

    function servico() {
        return $this->belongsTo('App\Servico');
    }
}
