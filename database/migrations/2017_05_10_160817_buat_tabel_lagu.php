<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelLagu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id',false,true);
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul',50);
            $table->string('penyanyi',50);
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
        Schema::drop('lagu');
    }
}
