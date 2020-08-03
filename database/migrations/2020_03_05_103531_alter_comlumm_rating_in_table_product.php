<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterComlummRatingInTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('pro_total_number')->default(0);//tong so diem danh gia
            $table->integer('pro_total_rating')->default(0);// tong so lan danh gia
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
            $table->dropColumn('pro_total_number');
            $table->dropColumn('pro_total_rating');
        });
    }
}
