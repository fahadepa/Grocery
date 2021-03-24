<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sale', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('sale_id')->bigIncrement();
            $table->foreignId('product_id')->constrained();
            $table->foreignID('customer_id')->constrained();
            $table->foreignID('product_name')->constrained();
            $table->float('product_sale_price');
            $table->char('product_payment_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_sale');
    }
}
