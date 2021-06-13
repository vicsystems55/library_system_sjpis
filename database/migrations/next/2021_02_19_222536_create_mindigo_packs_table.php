<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMindigoPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mindigo_packs', function (Blueprint $table) {
            $table->bigIncrements('id');
  
            $table->string('title');
            $table->string('description');
            $table->double('reg_fee');
            $table->integer('grade');
            $table->integer('points');
            $table->string('dr_commission');
            $table->string('match_bonus');
            $table->integer('max_daily_matching');
            $table->string('banner_img');
            
            
           
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
        Schema::dropIfExists('mindigo_packs');
    }
}
