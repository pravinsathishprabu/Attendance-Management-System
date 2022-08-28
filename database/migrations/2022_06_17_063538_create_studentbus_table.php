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
        Schema::create('studentbus', function (Blueprint $table) {
            $table->id();
            $table->string('Bus_no');
            $table->string('Student1');
            $table->string('Student2');
            $table->string('Student3');
            $table->string('Student4');
            $table->string('Student5');
            $table->string('Student6');
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
        Schema::dropIfExists('studentbus');
    }
};
