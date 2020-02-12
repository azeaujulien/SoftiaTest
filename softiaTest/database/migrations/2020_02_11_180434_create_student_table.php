<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('mail');
            $table->unsignedInteger('convention_id');
            $table->timestamps();
        });

        Schema::table('student', function (Blueprint $table) {
            $table->foreign('convention_id')->references('id')->on('convention');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
