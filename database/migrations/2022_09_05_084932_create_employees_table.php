<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('role')->nullable();

            $table->unsignedBigInteger('branch_id')->nullable();
            $table->foreign('branch_id')->references('id')->on('branch')->onDelete('cascade');
            //employee join branch on employee.branch_id = branch.id

            $table->string('name');
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->longText('pfp')->nullable();
            $table->longText('address')->nullable();

            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->string('fb')->nullable();
            $table->string('sss')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('bankacct')->nullable();
            $table->timestamps();
        });
    }

    //unsignedBigInteger
    //$table->timestamps();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
