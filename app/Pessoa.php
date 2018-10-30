<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'tipo_pessoa_id',
        'cpf',
        'RG',
        'email',
        'status'
    ];

    function endereco() {
        return $this->hasOne('App\Endereco');
    }

    function telefone() {
        return $this->hasMany('App\Telefone');
    }

    function veiculo(){
        return $this->hasMany('App\Veiculo');
    }
}
