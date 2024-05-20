<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorDataTable extends Migration
{
    public function up()
    {
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->float('temperature');
            $table->float('humidity');
            $table->float('rain');
            $table->float('water_level');
            $table->timestamps();
        });

        // Modify 'created_at' and 'updated_at' columns to be nullable
        Schema::table('sensor_data', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable()->change();
            $table->timestamp('updated_at')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensor_data');
    }
}
