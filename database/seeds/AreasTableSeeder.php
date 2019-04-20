<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AreasTableSeeder extends Seeder
{
    protected $faker = [];

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run()
    {
        for ($i = 1; $i < 1000; $i++) {
            DB::table('areas')->insert([
                'name'         => $this->faker->streetName,
                'city_id'      => $this->faker->numberBetween($min = 1, $max = 50),
                'created_at'   => $this->faker->iso8601($max = 'now'),
                'updated_at'   => $this->faker->iso8601($max = 'now'),
            ]);
        }
    }
}
