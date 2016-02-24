<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatSubcatDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CatsSubcats', function (Blueprint $table) {
           // Individual number for each item
           $table->increments('id');
           // Type of item cat, subcat or item
           $table->string('type');
           // Name of the item
           $table->string('title');
           // name of the image.jpg
           $table->string('img');
           // cat_id matches with the main cat
           $table->integer('cat_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('CatsSubcats');
    }
}
