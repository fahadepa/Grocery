<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('product_id');
            $table->char('product_name');
            $table->date('product_purchase_date');
            $table->integer('product_purchase_quantity');
            $table->integer('product_sold');
            $table->float('product_purchase_price');
            $table->float('product_discount')->nullable();
            $table->date('product_mfg');
            $table->date('product_bb');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_product');
    }
}
