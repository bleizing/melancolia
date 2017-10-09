<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artwork_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("artwork_order_id");
            $table->string("uang_muka");
            $table->string("sisa_uang_muka");
            $table->string("ongkos_kirim");
            $table->integer("lunas");
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
        Schema::drop('artwork_transaksi');
    }
}
