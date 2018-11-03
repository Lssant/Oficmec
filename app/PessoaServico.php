<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaServico extends Model
{
    protected $fillable = [
        'pessoa_id',
        'servico_id'
    ];
    
}
