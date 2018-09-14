<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    // nome da function deve ter o nome de onde vem o relacionamento
    function pessoa(){
        return $this->belongsTo('App\Pessoa');
    }
}
