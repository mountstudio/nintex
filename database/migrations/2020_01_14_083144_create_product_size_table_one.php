<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSizeTableOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('product_size');
        Schema::create('product_size', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->nullable();
            $table->longText('sizes')->nullable();
            $table->string('color');
            $table->string('quantity')->default(0);
            $table->longText('images')->nullable();
            $table->integer('price')->default(0);
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
        Schema::dropIfExists('product_size');
    }
}
