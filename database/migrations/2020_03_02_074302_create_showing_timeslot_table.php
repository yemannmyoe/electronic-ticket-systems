<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowingTimeslotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showing_timeslot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('showing_id');
            $table->unsignedBigInteger('timeslot_id');
            $table->timestamps();
    
        $table->foreign('showing_id')
      ->references('id')->on('showings')
      ->onDelete('cascade');

       $table->foreign('timeslot_id')
             ->references('id')->on('timeslots')
             ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showing_times');
    }
}
