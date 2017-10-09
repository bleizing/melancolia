<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJasaPengirimanIdToArtworkOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artwork_order', function (Blueprint $table) {
            $table->integer("jasa_pengiriman_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artwork_order', function (Blueprint $table) {
            $table->dropColumn("jasa_pengiriman_id");
        });
    }
}
