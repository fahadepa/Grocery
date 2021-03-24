<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\collection;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table__customer')->insert([
            'customer_id'=>str::random(10),
            'first_name' => str::random(10),
            'last_name' => str::random(10),
            'product_purchase'=> str::random(10),
        ]);
    }
}
