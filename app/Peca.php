<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $fillable =[
        'nome',
        'descricao',
        'quantidade',
        'valor'
    ];

    //primeiro parametro nome do model segundo nome da tabela
    function servicos(){
        return $this->belongsToMany("App\Servico","peca_servicos")->withPivot('valor_un','quantidade');
    }
}
