<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     $faker = \Faker\Factory::create();

    //     for ($i = 0; $i < 100; $i++) {
    //         $id = $faker->unique()->numberBetween(1, 100);
    //         $product_name = $faker->word();
    //         $description = $faker->paragraph();
    //         $retail_price = $faker->numberBetween(10000, 100000);
    //         $wholesale_price = $faker->numberBetween(5000, 50000);
    //         $origin = $faker->countryCode();
    //         $quantity = $faker->numberBetween(1, 100);
    //         $created_at = $faker->dateTimeBetween('-2 years', 'now');

    //         DB::table('products')->insert([
    //             'id' => $id,
    //             'product_name' => $product_name,
    //             'description' => $description,
    //             'retail_price' => $retail_price,
    //             'wholesale_price' => $wholesale_price,
    //             'origin' => $origin,
    //             'quantity' => $quantity,
    //             'created_at' => $created_at,
    //         ]);
    //     }
    // }
}

