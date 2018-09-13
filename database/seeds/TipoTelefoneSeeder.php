<?php

use Illuminate\Database\Seeder;

class TipoTelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_telefones')->insert(['nome' => 'Residencial']);
        DB::table('tipo_telefones')->insert(['nome' => 'Celular']);
        DB::table('tipo_telefones')->insert(['nome' => 'Comercial']);

    }
}
