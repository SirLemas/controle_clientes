<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => 'Wafiu Hoici',
            'telefone' => '82999875236',
            'cpf' => '01507927002',
            'placa_carro' => 'AVX2107'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Riotehu Puhueco',
            'telefone' => '82988589632',
            'cpf' => '57650284034',
            'placa_carro' => 'MVE3607'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Heofan Heypi',
            'telefone' => '82984456336',
            'cpf' => '90820859095',
            'placa_carro' => 'MWT0089'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Zoaon Fuble',
            'telefone' => '82999864548',
            'cpf' => '81574397010',
            'placa_carro' => 'MUJ7729'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Flege Pigin',
            'telefone' => '82998856445',
            'cpf' => '85296670000',
            'placa_carro' => 'MDD1880'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Inhis Sour',
            'telefone' => '82998856325',
            'cpf' => '18142136007',
            'placa_carro' => 'MER3507'
        ]);
    }
}
