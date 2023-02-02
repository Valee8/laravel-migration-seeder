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
        Schema::create('travel', function (Blueprint $table) {
            $table -> id();
            $table -> string('agency', 64);
            $table -> string('phone', 20);
            $table -> string('departure', 32);
            $table -> string('destination', 32);
            $table -> datetime('start_date');
            $table -> datetime('end_date');
            $table -> integer('price') -> unsigned() -> nullable(true);
            $table -> text('description') -> nullable(true);
            $table -> boolean('refundable') -> default(false);
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
        Schema::dropIfExists('travel');
    }
};
