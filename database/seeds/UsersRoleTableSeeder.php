<?php

use Illuminate\Database\Seeder;

class UsersRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_user_role')->insert(
            [
                'role' => 'admin'
            ],
            [
                'role' =>'user'
            ]
        );
   }

}

