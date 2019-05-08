<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            'name' => str_random(10)
        ]);
    }
}
