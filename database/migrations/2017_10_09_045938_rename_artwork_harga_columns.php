<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameArtworkHargaColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artwork_harga', function (Blueprint $table) {
            $table->renameColumn("harga_cetak", "cetak");
            $table->renameColumn("harga_bingkai", "bingkai");
            $table->renameColumn("harga_jasa", "jasa");
            $table->renameColumn("harga_packing", "packing");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artwork_harga', function (Blueprint $table) {
            $table->renameColumn("cetak", "harga_cetak");
            $table->renameColumn("bingkai", "harga_bingkai");
            $table->renameColumn("jasa", "harga_jasa");
            $table->renameColumn("packing", "harga_packing");
        });
    }
}
