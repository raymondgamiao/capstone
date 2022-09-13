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
    protected $fillable = ['name', 'date_start', 'date_end', 'time_start', 'time_end', 'venue', 'client_id'];
    public function up()
    {


        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->time('time_start');
            $table->time('time_end');
            $table->string('venue');

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
        Schema::dropIfExists('bookings');
    }
}
