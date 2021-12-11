<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atteches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sync_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
            $table->foreign('sync_id')->references('id')->on('syncs')
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
        Schema::dropIfExists('atteches');
    }
}
