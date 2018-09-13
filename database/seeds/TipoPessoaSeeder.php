<?php

use Illuminate\Database\Seeder;

class TipoPessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_pessoas')->insert(['nome' => 'Cliente']);
        DB::table('tipo_pessoas')->insert(['nome' => 'Mecânico']);

    }
}
