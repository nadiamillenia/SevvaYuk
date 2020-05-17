<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Handphone & Aksesoris',
            'slug' => 'handphone-dan-aksesoris'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Perawatan & Kecantikan',
            'slug' => 'perawatan-dan-kecantikan'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Makanan & Minuman',
            'slug' => 'makanan-dan-minuman'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        
        DB::table('product_categories')->insert([
            'name' => 'Hobi & Koleksi',
            'slug' => 'hobi-dan-koleksi'
        ]);
        
        DB::table('product_categories')->insert([
            'name' => 'Perlengkapan Rumah',
            'slug' => 'perlengkapan-rumah'
        ]);
        
        DB::table('product_categories')->insert([
            'name' => 'Pakaian',
            'slug' => 'pakaian'
        ]);
        
        DB::table('product_categories')->insert([
            'name' => 'Aksesoris Fashion',
            'slug' => 'aksesoris-fashion'
        ]);
        
        DB::table('product_categories')->insert([
            'name' => 'Komputer & Aksesoris',
            'slug' => 'komputer-dan-aksesoris'
        ]);
    }
}
