<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studs', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('sunname');
            $table->string('firstname');
            $table->string('email');
            $table->string('password');

            $table->string('status');
            $table->date('dob');
            $table->string('address');
            $table->boolean('sex');
            $table->string('nationality');
            $table->date('dateregistered');
            $table->string('national_id')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();

            $table->string('passport',50)->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('phone');
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
        Schema::dropIfExists('studs');
    }
}
