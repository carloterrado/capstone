<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('contact');
            $table->string('destination');
            $table->enum('driver',['0','1']);
            $table->string('driver_fee');
            $table->string('car_price');
            $table->string('grand_total');
            $table->text('address');
            $table->string('license');
            $table->string('identification_id');
            $table->string('utility');
            $table->bigInteger('booking_id');
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
        Schema::dropIfExists('booking_infos');
    }
}
