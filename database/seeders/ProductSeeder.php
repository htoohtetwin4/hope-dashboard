<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $numberOfProducts = 4;

        for ($i = 0; $i < $numberOfProducts; $i++) {
            $product = Product::create([
                'name' => $faker->name,
                'detail' => $faker->text,
                'cost' => $faker->randomNumber(5, true),
                'category' => $faker->word,
            ]);
        }
    }
}
