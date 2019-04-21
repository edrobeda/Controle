<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pessoa')->insert(
            [
                'nome' => 'Edson Rogerio Bedana',
                'doc' => '26885523844',
                'email' => json_encode(['edrobeda@gmail.com']),
                'cellphone' => json_encode(['19981442580']),
                'phone' => json_encode(['1934052331']),
                'fk_estado_civil' => 1,
                'fk_tipo_logradouro' => 1,
                'logradouro' => 'Vinhedo',
                'numero' => 290,
                'bairro' => 'Parque Univessitário',
                'cidade' => 'Americana',
                'uf' => 'SP',
                'data_nasc' => '1987-05-09',
                'observacoes' => 'Usuário Criado Default',
                'ativa' => true
            ]
        );
    }
}
