<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class sale extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_sale')->Insert([

            'product_sale_price'=>str::random(10),
            'product_payment_method'=>str::random(10)
        ]);
    }
}
