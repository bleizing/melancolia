<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artwork_harga', function (Blueprint $table) {
            $table->increments('id');
            $table->string("ukuran");
            $table->integer("harga_cetak");
            $table->integer("harga_bingkai");
            $table->integer("harga_jasa");
            $table->integer("harga_packing");
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
        Schema::drop('artwork_harga');
    }
}
