<?php

use Illuminate\Database\Seeder;

class PecaServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peca_servicos')->insert([
            'peca_id'=>1,
            'servico_id'=>1,
            'valor_un'=>20.30,
            'quantidade'=>1,
        ]);
        DB::table('peca_servicos')->insert([
            'peca_id'=>2,
            'servico_id'=>2,
            'valor_un'=>20.30,
            'quantidade'=>1,
        ]);
        DB::table('peca_servicos')->insert([
            'peca_id'=>3,
            'servico_id'=>3,
            'valor_un'=>20.30,
            'quantidade'=>1,
        ]);
        DB::table('peca_servicos')->insert([
            'peca_id'=>5,
            'servico_id'=>4,
            'valor_un'=>25.50,
            'quantidade'=>4,
        ]);
    }
}
