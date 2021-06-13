<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinaryTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binary_trees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('user_code');
            $table->string('position')->default('L');
            $table->string('legs')->default('00');
            $table->string('status')->default('success');
            $table->string('pack_name');
            $table->bigInteger('pack_id')->unsigned();

            $table->nestedSet();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pack_id')->references('id')->on('mindigo_packs');
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
        Schema::table('binary_trees', function (Blueprint $table) {
            $table->dropNestedSet();
        });
    }
}
