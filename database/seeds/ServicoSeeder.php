<?php

use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert([
            'diagnostico'=>'barulho A',
            'descricao'=>' verificado A danificado',
            'mao_obra'=>50.00,
            'forma_pgto'=>'A vista',
            'total'=>100.00,
            'pago'=>60.00,
            'veiculo_id'=>1]);

        DB::table('servicos')->insert([
            'diagnostico'=>'barulho B',
            'descricao'=>' verificado B danificado',
            'mao_obra'=>60.00,
            'forma_pgto'=>'A vista',
            'total'=>80.00,
            'pago'=>80.00,
            'veiculo_id'=>1]);

        DB::table('servicos')->insert([
            'diagnostico'=>'quebra peca c',
            'descricao'=>' verificado C quebrado',
            'mao_obra'=>100.00,
            'forma_pgto'=>'A vista',
            'total'=>200.00,
            'pago'=>100.00,
            'veiculo_id'=>2]);

        DB::table('servicos')->insert([
            'diagnostico'=>'troca óleo',
            'descricao'=>'trocado óleo X',
            'mao_obra'=>75.00,
            'forma_pgto'=>'A vista',
            'total'=>140.00,
            'pago'=>100.00,
            'veiculo_id'=>2]);

    }
}
