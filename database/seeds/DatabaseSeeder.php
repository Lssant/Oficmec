<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        $this->call(TipoPessoaSeeder::class);
        $this->call(TipoTelefoneSeeder::class);
        $this->call(PessoaSeeder::class);
        $this->call(TelefoneSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(VeiculoSeeder::class);
        $this->call(PecaSeeder::class);
        $this->call(ServicoSeeder::class);
        $this->call(PessoaServicoSeeder::class);
        $this->call(PecaServicoSeeder::class);

        
        */
        $this->call(PagamentoSeeder::class);



    }
}
