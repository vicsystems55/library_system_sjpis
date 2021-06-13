<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchingBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matching_bonuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('owners_id')->unsigned();
            $table->string('total_left_points')->default('0');
            $table->string('total_right_points')->default('0');
            $table->string('aggregate')->default('0');
            $table->string('new_bonus')->default('0');
            $table->string('total_bonus')->default('0');

            $table->foreign('owners_id')->references('id')->on('users');
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
        Schema::dropIfExists('matching_bonuses');
    }
}
