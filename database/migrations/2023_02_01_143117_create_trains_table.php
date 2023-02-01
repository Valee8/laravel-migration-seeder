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
            $table -> id();
            $table -> string('agency', 32);
            $table -> string('departure_station', 32);
            $table -> string('arrival_station', 32);
            $table -> time('departure_time');
            $table -> time('arrival_time');
            $table -> string('code', 10) -> unique();
            $table -> integer('number_of_carriages');
            $table -> timestamps();
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
