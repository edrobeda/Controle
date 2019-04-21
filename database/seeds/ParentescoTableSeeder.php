<?php

use Illuminate\Database\Seeder;

class ParentescoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tb_parentesco')->insert(
            [
                'grau_parentesco' => 'pai'
            ],[
                'grau_parentesco' => 'mae'
            ]
        );

    }
}
