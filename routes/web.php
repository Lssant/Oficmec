<?php

use App\Endereco;
use App\Pessoa;


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

Route::get('/pessoa', function () {
    $pes = Pessoa::all();
    echo "<table>";
    echo "<thead><td> </td></thead>";
    foreach ($pes as $p) {
        echo "<tr>";
        echo "<td>". $p->id ."</td>";
        echo "<td>". $p->nome ."</td>";
        echo "<td>". $p->endereco->logradouro ."</td>";
        //echo "<td>".  ."</td>";
        echo "</tr>";
        
    }

});

Route::get('/endereco', function () {
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