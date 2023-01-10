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
            $table->string('agency', 100);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('code_of_train', 15)->nullable();
            $table->integer('train_car_number')->nullable();
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_deleted')->default(0);
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
