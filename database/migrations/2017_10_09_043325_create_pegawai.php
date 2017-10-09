<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->integer("jenis_kelamin");
            $table->string("alamat");
            $table->string("no_hp");
            $table->string("email");
            $table->string("npwp");
            $table->string("no_rekening");
            $table->integer("bank_id");
            $table->integer("level_pegawai_id");
            $table->integer("jabatan_pegawai_id");
            $table->integer("posisi_pegawai_id");
            $table->integer("member_pegawai_id");
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
        Schema::drop('pegawai');
    }
}
