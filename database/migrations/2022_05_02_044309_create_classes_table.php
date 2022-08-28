<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('sem');
            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('subject4');
            $table->string('subject5');
            $table->string('subject6');
            $table->string('lab1');
            $table->string('lab2');
            $table->string('lab3');
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
        Schema::dropIfExists('classes');
    }
};
