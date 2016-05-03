<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('word_length');
            $table->string('subject');
            $table->string('academic_level');
            $table->dateTime('deadline');
            $table->float('total');
            $table->string('style');
            $table->string('attachment');
            $table->integer('no_of_sources');
            $table->longText('instructions');
            $table->longText('essential_sources');
            $table->longText('suggested_sources');
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
        Schema::drop('orders');
    }
}
