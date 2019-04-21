<?php

use Illuminate\Database\Seeder;

class EstadoCivilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_estado_civil')->insert(
        [
            'estado_civil' => 'casado(a)'
        ],[
            'estado_civil' => 'solteiro(a)'
        ]

    );

    }

}
