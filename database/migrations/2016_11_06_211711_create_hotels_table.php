<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->integer('stars')->unsigned();
            $table->decimal('price_single', 5, 2);
            $table->decimal('price_double', 5, 2);
            $table->decimal('price_triple', 5, 2);
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
