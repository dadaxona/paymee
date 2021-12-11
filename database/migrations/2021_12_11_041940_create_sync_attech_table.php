<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyncAttechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attech_sync', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('attech_id')->unsigned();
           $table->bigInteger('sync_id')->unsigned();
           $table->foreign('attech_id')->references('id')->on('atteches')->onDelete('cascade')->onUpdate('cascade');
           $table->foreign('sync_id')->references('id')->on('syncs')->onDelete('cascade')->onUpdate('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attech_sync');
    }
}
