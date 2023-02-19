<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_check_lists', function (Blueprint $table) {
            $table->id();
            $table->json('windshield');
            $table->json('hood');
            $table->json('grill');
            $table->json('frontPlate');
            $table->json('bumper');
            $table->json('headlights');
            $table->json('rearWindow');
            $table->json('bootTrunk');
            $table->json('backPlate');
            $table->json('rearBumper');
            $table->json('tailLights');
            $table->json('rightSideMirror');
            $table->json('rightSideFrontFender');
            $table->json('rightSideFrontDoorWindow');
            $table->json('rightSideRearDoorWindow');
            $table->json('rightSideFrontDoor');
            $table->json('rightSideRearDoor');
            $table->json('rightSideRearFender');
            $table->json('rightSideFrontWheels');
            $table->json('rightSideBackWheels');
            $table->json('leftSideMirror');
            $table->json('leftSideFrontFender');
            $table->json('leftSideFrontDoorWindow');
            $table->json('leftSideRearDoorWindow');
            $table->json('leftSideFrontDoor');
            $table->json('leftSideRearDoor');
            $table->json('leftSideRearFender');
            $table->json('leftSideFrontWheels');
            $table->json('leftSideBackWheels');
            $table->json('seatBelts');
            $table->json('airbags');
            $table->json('signalLights');
            $table->json('hazardLights');
            $table->json('frontExteriorLights');
            $table->json('backExteriorLights');
            $table->json('acceleratorPedal');
            $table->json('breakPedal');
            $table->json('clutchPedal');
            $table->json('gearShift');
            $table->json('steeringWheel');
            $table->json('horn');
            $table->text('others')->nullable();
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
        Schema::dropIfExists('car_check_lists');
    }
}
