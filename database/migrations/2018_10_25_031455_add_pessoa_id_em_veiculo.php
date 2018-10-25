<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPessoaIdEmVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculos', function (Blueprint $table) {
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veiculos', function (Blueprint $table) {
            $table->dropForeign(['pessoa_id']);
            $table->dropColumn('pessoa_id');
        });
    }
}
