<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class tabel_test_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 20; $i++) { 
            DB::table('test_data')->insert(
                [
                    'data' => $faker->word,
                    'note' => $faker->word
                ]
            );
        }
    }
}
