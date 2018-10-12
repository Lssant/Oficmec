<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $primaryKey = 'pessoa_id';

    protected $fillable =[
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'PtReferencia'
    ];
    // nome da function deve ter o nome de onde vem o relacionamento
    function pessoa(){
        return $this->belongsTo('App\Pessoa');
    }
}
