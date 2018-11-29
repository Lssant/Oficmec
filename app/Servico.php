<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $primaryKey = 'id';

    protected $fillable =[
        'diagnostico',
        'descricao',
        'mao_obra',
        'forma_pgto',
        'total',
        'pago',
        'veiculo_id',
    ];

    function veiculo() {
        return $this->belongsTo('App\Veiculo');
    }

    function pagamento(){
        return $this->hasMany('App\Pagamento');
    }

    //primeiro parametro nome do model segundo nome da tabela
    function pessoa(){
        return $this->belongsToMany('App\Pessoa','pessoa_servicos');
    }

    function peca(){
        return $this->belongsToMany('App\Peca','peca_servicos')->withPivot('valor_un','quantidade');
    }
}
