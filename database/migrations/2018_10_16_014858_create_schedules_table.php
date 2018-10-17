<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('graha_id')->unsigned();
            $table->string('title');
            $table->text('desc');
            $table->date('date_start');
            $table->string('clock_start');
            $table->timestamp('clock_start_early');
            $table->date('date_end');
            $table->string('clock_end');
            $table->timestamps();

            $table->foreign('graha_id')->references('id')->on('graha')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
