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
        $this->call(TipoPessoaSeeder::class);
        $this->call(TipoTelefoneSeeder::class);
        $this->call(PessoaSeeder::class);
        $this->call(TelefoneSeeder::class);
        $this->call(EnderecoSeeder::class);

    }
}
