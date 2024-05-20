<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enviro', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('death');
            $table->string('floodNo');
            $table->string('rainlvl');
            $table->string('region');
            $table->string('floodtimes');
            $table->string('district');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enviro');
    }
};
