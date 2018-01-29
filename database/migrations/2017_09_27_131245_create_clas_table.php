<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clas', function (Blueprint $table) {
            $table->increments('cla_id');
            $table->integer('academic_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('batch_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('shift_id')->unsigned();
            $table->boolean('active');
           /* $table->foreign('group_id')->references('id')->on('groups');*/
            /*$table->foreign('time_id')->references('time_id')->on('times');
            $table->foreign('batch_id')->references('batch_id')->on('batches');
            $table->foreign('level_id')->references('level_id')->on('levels');
            $table->foreign('academic_id')->references('academic_id')->on('academics');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');*/







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
        Schema::dropIfExists('clas');
    }
}
