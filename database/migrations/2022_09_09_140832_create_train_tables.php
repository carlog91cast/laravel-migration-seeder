<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('departure gate');
            $table->string('arrival gate');
            $table->dateTime('departure time');
            $table->dateTime('arrival time');
            $table->string('code');
            $table->tinyInteger('carriage numeber');
            $table->boolean('in time');
            $table->boolean('cancelled');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_tables');
    }
}
