<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 100; $i++) { 
            DB::table('products')->insert([
                'shop_id' => $faker->numberBetween(1, 9),
                'name' => $faker->sentence(2, true),
                'slug' => $faker->slug,
                'stock' => $faker->numberBetween(10, 20),
                'price' => $faker->randomNumber(5),
                'description' => $faker->text(200),
                'image' => $faker->imageUrl(640, 480),
                'product_category_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
