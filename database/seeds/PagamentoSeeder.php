<?php

use Illuminate\Database\Seeder;

class PagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagamentos')->insert(['descricao' => 'recebimento adiantado','valor' => 60.00 ,'servico_id'=> 1]);
        DB::table('pagamentos')->insert(['descricao' => 'pago a vista ','valor' => 80.00 ,'servico_id'=> 2]);
        DB::table('pagamentos')->insert(['descricao' => 'pago mão de obra ','valor' => 100.00 ,'servico_id'=> 3]);
        DB::table('pagamentos')->insert(['descricao' => 'recebimento adiantado','valor' => 100.00 ,'servico_id'=> 4]);

    }
}
