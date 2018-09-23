<?php

use App\TipoPessoa;
use App\TipoTelefone;
use App\Endereco;
use App\Pessoa;
use App\Telefone;



Route::get('/', function () {
    return view('index');
});

Route::get('/clientes','ControladorCliente@index');
Route::get('/contato','ControladorContato@index');

Route::get('/clientes/novo', 'ControladorCliente@create');
Route::post('/clientes', 'ControladorCliente@store');
Route::get('/clientes/apagar/{id}','ControladorCliente@destroy');
Route::get('/clientes/editar/{id}','ControladorCliente@edit');
Route::post('/clientes/{id}','ControladorCliente@update');

Route::get('/produtos', 'ControladorProduto@indexView');

// -----

Route::get('/pessoa', 'ControllerPessoa@index');


// ---- tipo pessoa

Route::get('/tipopessoa', 'ControllerTipoPessoa@index');
Route::get('/tipopessoa/novo', 'ControllerTipoPessoa@create');
Route::post('/tipopessoa', 'ControllerTipoPessoa@store');
Route::get('/tipopessoa/editar/{id}','ControllerTipoPessoa@edit');
Route::post('/tipopessoa/{id}','ControllerTipoPessoa@update');
Route::get('/tipopessoa/apagar/{id}','ControllerTipoPessoa@destroy');

// ---- tipo telefone

Route::get('/tipotelefone', 'ControllerTipoTelefone@index');
Route::get('/tipotelefone/novo', 'ControllerTipoTelefone@create');
Route::post('/tipotelefone', 'ControllerTipoTelefone@store');
Route::get('/tipotelefone/editar/{id}', 'ControllerTipoTelefone@edit');
Route::post('/tipotelefone/{id}', 'ControllerTipoTelefone@update');
Route::get('/tipotelefone/apagar/{id}','ControllerTipoTelefone@destroy');

// ----
Route::get('/testepessoa', function () {
    $pes = Pessoa::all();
    echo "<table>";
    echo "<thead><td> </td></thead>";
    foreach ($pes as $p) {
        echo "<tr>";
        echo "<td>". $p->id ."</td>";
        echo "<td>". $p->nome ."</td>";
        echo "<td>". $p->telefone ."</td>";
        echo "<td>". $p->endereco->logradouro ."</td>";
        //echo "<td>".  ."</td>";
        echo "</tr>";
        
    }

});


Route::get('/testendereco', function () {
    $end = Endereco::all();

    if(count($end) === 0)
        echo "<h4> você não possui endereços cadastrados </h4>";
    else{
        echo "<table>";
        echo "<thead><td>id</td><td>Logradouro</td><td>numero</td><td>complemento</td><td>bairro</td><td>cep</td><td>referencia</td><td>pessoa</td>";
        foreach ($end as $e) {
            echo "<tr>";
            echo "<td>" . $e->id ."</td>";
            echo "<td>" . $e->logradouro ."</td>";
            echo "<td>" . $e->numero ."</td>";
            echo "<td>" . $e->complemento ."</td>";
            echo "<td>" . $e->bairro ."</td>";
            echo "<td>" . $e->cep ."</td>";
            echo "<td>" . $e->PtReferencia ."</td>";
            echo "<td>" . $e->pessoa->nome ."</td>";
            echo "</tr>";
        }
    }

});

Route::get('/testetipopessoa', function () {
    $tipes = TipoPessoa::all();
    echo "<table>";
    echo "<thead><td> </td></thead>";
    foreach ($tipes as $tp) {
        echo "<tr>";
        echo "<td>". $tp->id ."</td>";
        echo "<td>". $tp->nome ."</td>";
        echo "</tr>";   
    }
});

Route::get('/testetipotelefone', function () {
    $tiptel = TipoTelefone::all();
    echo "<table>";
    echo "<thead><td> </td></thead>";
    foreach ($tiptel as $tt) {
        echo "<tr>";
        echo "<td>". $tt->id ."</td>";
        echo "<td>". $tt->nome ."</td>";
        echo "</tr>";  
    }
});