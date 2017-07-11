<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('product')->insert([
                'part_number' => strtoupper($faker->word) . '-' . rand(100, 999),
                'name' => $faker->company,
                'price' => $faker->randomFloat(2, 100, 1),
                'description' => $faker->text
            ]);
        }

    }
}
