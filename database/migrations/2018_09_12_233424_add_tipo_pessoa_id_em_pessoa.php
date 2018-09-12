<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoPessoaIdEmPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->integer('tipo_pessoa_id')->unsigned();
            $table->foreign('tipo_pessoa_id')->references('id')->on('tipo_pessoas_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->dropForeign(['tipo_pessoa_id']);
            $table->dropColumn('tipo_pessoa_id');
        });
    }
}
