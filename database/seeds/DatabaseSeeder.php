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
        $this->call(UsersRoleTableSeeder::class);
        
        $this->call(UsersTableSeeder::class);
        $this->call(SalaTableSeeder::class);

        $this->call(EstadoCivilTableSeeder::class);
        $this->call(PessoaParentescoTableSeeder::class);
        $this->call(ParentescoTableSeeder::class);

        $this->call(PessoaTableSeeder::class);

//      $this->call(SalaPessoaTableSeeder::class);
        $this->call(NucleosTableSeeder::class);
    }
}
