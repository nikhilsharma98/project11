<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('aadhar_id');
            $table->dateTime('dob');
            $table->dateTime('doa');
            $table->string('photo');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->integer('state_id');
            $table->integer('countary_id');
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
        Schema::dropIfExists('students');
    }
}
