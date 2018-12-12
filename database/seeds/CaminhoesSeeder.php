<?php

use Illuminate\Database\Seeder;

class CaminhoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Caminhoes::class, 5)
        	->create();
    }
}
