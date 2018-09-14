<?php

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert(['nome' => 'João','cpf' => '1111111111','RG'=>'111111111','email'=>'joao@hotmail.com','status'=>'OK','tipo_pessoa_id' => 2]);
        DB::table('pessoas')->insert(['nome' => 'Jose','cpf' => '2222222222','RG'=>'222222222','email'=>'jose@hotmail.com','status'=>'OK','tipo_pessoa_id' => 2]);
        DB::table('pessoas')->insert(['nome' => 'Maria','cpf' => '3333333333','RG'=>'333333333','email'=>'maria@hotmail.com','status'=>'OK','tipo_pessoa_id' => 1]);
        DB::table('pessoas')->insert(['nome' => 'Luciano','cpf' => '4444444444','RG'=>'444444444','email'=>'luciano@hotmail.com','status'=>'OK','tipo_pessoa_id' => 1]);
        DB::table('pessoas')->insert(['nome' => 'Ricardo','cpf' => '5555555555','RG'=>'555555555','email'=>'ricardo@hotmail.com','status'=>'OK','tipo_pessoa_id' => 1]);

    }
}
