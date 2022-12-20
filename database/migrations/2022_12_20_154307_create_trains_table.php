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
            $table->string('train_companies', 20);
            $table->string('train_station_from', 30);
            $table->string('train_station_to', 30);
            $table->dateTime('departure_hour',);
            $table->dateTime('arrival_hour');
            $table->smallInteger('train_code');
            $table->tinyInteger('railway_coaches');
            $table->boolean('on_time')->default(1);
            $table->string('cancelled', 10);
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
