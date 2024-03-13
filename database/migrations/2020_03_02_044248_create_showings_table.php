<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('hall_id');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('status');
            $table->timestamps();

            $table->foreign('movie_id')
            ->references('id')->on('movies')
            ->onDelete('cascade');

            $table->foreign('hall_id')
            ->references('id')->on('halls')
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
        Schema::dropIfExists('showings');
    }
}
