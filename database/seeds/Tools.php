<?php

use Illuminate\Database\Seeder;

class Tools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('abc')->insert([
            'name' => str_random(10),
         	'age' => str_random(2)
         ]);
    }
}
