<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletePricesColumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('descrip');
            $table->dropColumn('colors');
            $table->dropColumn('sizes');
            $table->dropColumn('price');
            $table->dropColumn('wholesale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('descrip');
            $table->json('colors');
            $table->json('sizes');
            $table->integer('price');
            $table->integer('wholesale');
        });
    }
}
