<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuitpleAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muitple_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('owners_id')->unsigned();
            $table->integer('account_id');
            $table->string('account_code');
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
        Schema::dropIfExists('muitple_accounts');
    }
}
