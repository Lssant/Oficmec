<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $primaryKey = 'id';
    protected $fillable =[
        'numero',
        'tipo_telefone_id'
    ];

    // nome da function deve ter o nome de onde vem o relacionamento
    function pessoa(){
        return $this->belongsTo('App\Pessoa');
    }
   
}
