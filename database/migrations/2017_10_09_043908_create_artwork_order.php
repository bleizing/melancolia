<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artwork_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("customer_id");
            $table->integer("confirm");
            $table->string("kode")->unique();
            $table->string("foto");
            $table->string("tanggal_order");
            $table->integer("status_id");
            $table->integer("pegawai_id");
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
        Schema::drop('artwork_order');
    }
}
