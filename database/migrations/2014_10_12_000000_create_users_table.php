<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->string('highest_education_level');
            $table->string('subjects_of_interest');
            $table->string('avatar');
            $table->enum('type',['writer','admin'])->default('writer');
            $table->longText('bio');
            $table->string('country');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
