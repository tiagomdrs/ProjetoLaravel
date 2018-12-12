<?php

use Illuminate\Database\Seeder;

class MotoristasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Motoristas::class, 20)
        	->create();
    }
}
