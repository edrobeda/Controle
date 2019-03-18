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
            'password' => base64_encode('123mudar'),
            'email_verified_at' => null,
            'role' => 'admin', 
            'description' => 'A default Admin',
            'image' => null,
        ]);
    
    }
}
