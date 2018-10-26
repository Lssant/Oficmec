<?php

use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veiculos')->insert(['marca' => 'Volkswagen', 'modelo' => 'Gol', 'cor' => 'branco', 'ano' => '2018-01-11', 'combustivel'=> 'Gasolina', 'placa' => 'AAA1111', 'pessoa_id'=>1]);
        DB::table('veiculos')->insert(['marca' => 'Ford', 'modelo' => 'Fiesta', 'cor' => 'branco', 'ano' => '2018-01-11', 'combustivel'=> 'Gasolina', 'placa' => 'AAA1111', 'pessoa_id'=>2]);
        DB::table('veiculos')->insert(['marca' => 'Chevrolet', 'modelo' => 'Onix', 'cor' => 'branco', 'ano' => '2018-01-11', 'combustivel'=> 'Gasolina', 'placa' => 'AAA1111', 'pessoa_id'=>3]);
        DB::table('veiculos')->insert(['marca' => 'FIAT', 'modelo' => 'Strada', 'cor' => 'branco', 'ano' => '2018-01-11', 'combustivel'=> 'Gasolina', 'placa' => 'AAA1111', 'pessoa_id'=>4]);
        DB::table('veiculos')->insert(['marca' => 'Honda', 'modelo' => 'Civic', 'cor' => 'branco', 'ano' => '2018-01-11', 'combustivel'=> 'Gasolina', 'placa' => 'AAA1111', 'pessoa_id'=>5]);
    }
}
