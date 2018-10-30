<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano',
        'combustivel',
        'placa'
    ];

    function pessoa(){
        return $this->belongsTo('App\Pessoa');
    }
}
