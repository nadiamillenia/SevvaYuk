<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            'name' => 'Menunggu Pembayaran',
            'slug' => 'waiting-payment'
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'Pembayaran Selesai',
            'slug' => 'payment-approved'
        ]);
    }
}
