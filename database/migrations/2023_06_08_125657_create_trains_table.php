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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('departure_station',50);
            $table->string('arrival_station',50);
            $table->time('departure_time', $precision = 4);
            $table->time('arrival_time', $precision = 4);
            $table->mediumInteger('train_code');
            $table->tinyInteger('train_carriage');
            $table->boolean('in_time');
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
        Schema::dropIfExists('trains');
    }
};