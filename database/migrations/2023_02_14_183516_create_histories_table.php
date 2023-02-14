<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->string('address');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('time');
            $table->string('destination');
            $table->string('driver');
            $table->string('driver_fee');
            $table->string('car_price');
            $table->string('grand_total');
            $table->bigInteger('user_id');
            $table->bigInteger('car_id');
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
        Schema::dropIfExists('histories');
    }
}
