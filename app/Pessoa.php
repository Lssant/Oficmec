<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    function endereco() {
        return $this->hasOne('App\Endereco');
    }

    function telefone() {
        return $this->hasMany('App\Telefone');
    }
}
