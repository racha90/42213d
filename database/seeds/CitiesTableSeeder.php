<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder
{
    protected $faker = [];

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('cities')->insert([
                'name'         => $this->faker->unique()->city,
                'created_at'   => $this->faker->iso8601($max = 'now'),
                'updated_at'   => $this->faker->iso8601($max = 'now'),
            ]);
        }
    }
}
