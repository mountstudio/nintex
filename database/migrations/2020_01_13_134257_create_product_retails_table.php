<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_retails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_size_id')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('image')->nullable();
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
        Schema::dropIfExists('product_retails');
    }
}