<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);


        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'edrobeda@gmail.com',
            'email_verified_at' => null,
            'password' => base64_encode('123mudar'),
            'role' => 1,
            'description' => 'A default Admin',
            'image' => null,
            'active' => true
        ]);

    }
}
