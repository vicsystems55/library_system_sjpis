<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('reference');
            $table->integer('amount');
            $table->string('paid_at');
            $table->string('channel');
            $table->string('currency');
            $table->string('ip_address');
            $table->string('package');
            $table->string('sponsors_id')->unique();
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->bigInteger('pack_id')->unsigned();
            $table->string('pack_title');
            $table->boolean('mobile');       
            $table->string('customer_id');
            $table->string('customer_email');
            $table->string('customer_code');

            $table->foreign('pack_id')->references('id')->on('mindigo_packs');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
