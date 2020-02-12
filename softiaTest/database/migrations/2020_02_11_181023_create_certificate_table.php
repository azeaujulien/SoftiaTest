<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('student_id')->unsigned();
            $table->integer('convention_id')->unsigned();
            $table->text('message');
            $table->timestamps();
        });

        Schema::table('certificate', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('student');
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
        Schema::dropIfExists('certificate');
    }
}
