<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id',false,true);
            $table->foreign('room_id')->references('id')->on('room')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('member_id',false,true);
            $table->foreign('member_id')->references('id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->integer('total_bayar');
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
        Schema::drop('pesan');
    }
}
