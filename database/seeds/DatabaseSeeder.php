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
        $this->call(CaminhoesSeeder::class);
        $this->call(MotoristasSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(NoticiasSeeder::class);
    }
}
