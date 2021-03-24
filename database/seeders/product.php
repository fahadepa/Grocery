<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('table_product')->insert([
        'product_id'=>str::random(10),
        'product_name'=>str::random(10),
        'product_purchase_date'=>str::random(10),
        'product_purchase_quantity'=>str::random(10),
        'product_sold'=>str::random(10),
        'product_purchase_price'=>str::random(10),
        'product_discount'=>str::random(10),
        'product_mfg'=>str::random(10),
        'product_bb'=>str::random(10)
       ]);
    }
}
