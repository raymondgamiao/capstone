<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->time('time_start');
            $table->time('time_end');
            $table->string('venue');
            $table->longText('message')->nullable();

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

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
        Schema::dropIfExists('booking_reservations');
    }
}
