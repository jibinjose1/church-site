<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('studentName');
            $table->string('gender');
            $table->string('class');
            $table->string('dateOfBirth');
            $table->string('age');
            $table->string('streetOrRoad');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email');
            $table->string('phone');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('fatherOccupation');
            $table->string('motherOccupation');
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
