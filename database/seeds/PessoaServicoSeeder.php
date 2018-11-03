<?php

use Illuminate\Database\Seeder;

class PessoaServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoa_servicos')->insert([
            'pessoa_id'=>1,
            'servico_id'=>1,
        ]);
        DB::table('pessoa_servicos')->insert([
            'pessoa_id'=>1,
            'servico_id'=>2,
        ]);
        DB::table('pessoa_servicos')->insert([
            'pessoa_id'=>2,
            'servico_id'=>3,
        ]);
        DB::table('pessoa_servicos')->insert([
            'pessoa_id'=>2,
            'servico_id'=>4,
        ]);
    }
}
