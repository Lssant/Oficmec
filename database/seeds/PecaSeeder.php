<?php

use Illuminate\Database\Seeder;

class PecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pecas')->insert(['nome' => 'filtro','descricao' => 'filtro de óleo Gol','quantidade'=> 5,'valor'=>20.30]);
        DB::table('pecas')->insert(['nome' => 'filtro','descricao' => 'filtro de óleo Onix','quantidade'=> 5,'valor'=>20.30]);
        DB::table('pecas')->insert(['nome' => 'filtro','descricao' => 'filtro de óleo Fiesta','quantidade'=> 5,'valor'=>20.30]);
        DB::table('pecas')->insert(['nome' => 'filtro','descricao' => 'filtro de óleo Strada','quantidade'=> 5,'valor'=>20.30]);
        DB::table('pecas')->insert(['nome' => 'óleo','descricao' => '20W50','quantidade'=> 100,'valor'=>25.50]);
    }
}
