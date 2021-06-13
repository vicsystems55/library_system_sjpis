<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectReferralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_referrals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('referrer_id')->unsigned();
            $table->bigInteger('referree_id')->unsigned();
            $table->string('referral');
            $table->string('referree');
            $table->string('position')->nullable();
            $table->integer('weekInYear');
            $table->bigInteger('referrer_pack_id')->unsigned()->nullable();
            $table->bigInteger('referree_pack_id')->unsigned()->nullable();
            $table->integer('referrer_bonus')->nullable();
            $table->integer('referree_points')->nullable();
            $table->string('referrer_track_id')->nullable();
            $table->string('referree_track_id')->nullable();
            
            $table->string('status')->default('active');

            $table->foreign('referrer_pack_id')->references('id')->on('mindigo_packs');
            $table->foreign('referree_pack_id')->references('id')->on('mindigo_packs');

            $table->foreign('referrer_id')->references('id')->on('users');
            $table->foreign('referree_id')->references('id')->on('users');
     
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
        Schema::dropIfExists('direct_referrals');
    }
}
