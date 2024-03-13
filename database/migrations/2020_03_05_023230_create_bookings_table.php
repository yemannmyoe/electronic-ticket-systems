<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('showing_id');
            $table->unsignedBigInteger('timeslot_id');
            $table->unsignedBigInteger('customer_id');
            $table->date('bookingdate');
            $table->integer('seatnumber');
            $table->integer('totalqty');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('customer_id')
            ->references('id')->on('customers')
            ->onDelete('cascade');

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
        Schema::dropIfExists('bookings');
    }
}
