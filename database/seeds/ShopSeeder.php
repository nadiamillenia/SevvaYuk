<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 10; $i++) { 
            DB::table('shops')->insert([
                'name' => $faker->company,
                'slug' => $faker->slug,
                'description' => $faker->text(200),
                'address' => $faker->streetAddress,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $faker->imageUrl(640, 480),
                'shop_category_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
