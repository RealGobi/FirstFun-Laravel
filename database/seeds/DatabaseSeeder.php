<?php

use Illuminate\Database\Seeder;
use App\Plant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(Plant::class, 20)->create();
    }
}
