<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syncs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('atteche_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();          
            $table->foreign('atteche_id')->references('id')->on('atteches')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syncs');
    }
}
