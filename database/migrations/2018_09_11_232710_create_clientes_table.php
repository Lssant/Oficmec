<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('RG');
            $table->string('email');
            $table->string('status');
            $table->integer('telefone_id')->unsigned()->nullable();
            $table->foreing('telefone_id')->references('id')->on('telefones');

            $table->integer('endereco_id')->unsigned()->nullable();
            $table->foreing('endereco_id')->references('id')->on('enderecos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
