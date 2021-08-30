<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->text('content')->nullable();
            $table->string('time')->nullable();
            $table->string('address')->nullable();

            $table->string('number')->nullable();
            $table->string('number2')->nullable();
            $table->string('snap')->nullable();
            $table->string('snap2')->nullable();
            $table->string('inst')->nullable();
            $table->string('inst2')->nullable();
            $table->string('location')->nullable();

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
        Schema::dropIfExists('abouts');
    }
}
