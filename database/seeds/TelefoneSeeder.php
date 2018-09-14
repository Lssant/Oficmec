<?php

use Illuminate\Database\Seeder;

class TelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefones')->insert(['numero' => '11111111111','tipo_telefone_id' => 1,'pessoa_id'=>1]);
        DB::table('telefones')->insert(['numero' => '22222222222','tipo_telefone_id' => 2,'pessoa_id'=>2]);
        DB::table('telefones')->insert(['numero' => '33333333333','tipo_telefone_id' => 2,'pessoa_id'=>3]);
        DB::table('telefones')->insert(['numero' => '44444444444','tipo_telefone_id' => 3,'pessoa_id'=>4]);
        DB::table('telefones')->insert(['numero' => '55555555555','tipo_telefone_id' => 1,'pessoa_id'=>5]);


    }
}
