<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_product', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('cart_id')->nullable();
         $table->foreign('cart_id')->references('id')->on('carts');
         $table->unsignedBigInteger('product_id')->nullable();
        $table->foreign('product_id')->references('id')->on('products');
        $table->integer('quantity')->default(1);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
