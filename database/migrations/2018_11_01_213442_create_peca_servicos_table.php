<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecaServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peca_servicos', function (Blueprint $table) {
            $table->integer('peca_id')->unsigned();
            $table->foreign('peca_id')->references('id')->on('pecas');
            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->decimal('valor_un');
            $table->integer('quantidade');
            $table->timestamps();
            $table->primary(['peca_id','servico_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peca_servicos');
    }
}
