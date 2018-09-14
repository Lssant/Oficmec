<?php

use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert(['logradouro' => 'Av. Brasil','numero' => '152','complemento'=>'casa','bairro'=>'Centro','cep'=>'84261000','PtReferencia'=>'casa azul','pessoa_id'=>'1']);
        DB::table('enderecos')->insert(['logradouro' => 'Rua Amapa','numero' => '100','complemento'=>'casa','bairro'=>'nossa senhora','cep'=>'84260000','PtReferencia'=>'fundos loja','pessoa_id'=>'2']);
        DB::table('enderecos')->insert(['logradouro' => 'Rua Primavera','numero' => '359','complemento'=>'sobrado','bairro'=>'Area 2','cep'=>'84261530','PtReferencia'=>'sem referência','pessoa_id'=>'3']);
        DB::table('enderecos')->insert(['logradouro' => 'Av. Paraná','numero' => '580','complemento'=>'casa','bairro'=>'Centro','cep'=>'84261280','PtReferencia'=>'casa verde','pessoa_id'=>'4']);
        DB::table('enderecos')->insert(['logradouro' => 'Rua Santa Catarina','numero' => '420','complemento'=>'casa','bairro'=>'Area 3','cep'=>'8426120','PtReferencia'=>'Sem referência','pessoa_id'=>'5']);

    }
}
