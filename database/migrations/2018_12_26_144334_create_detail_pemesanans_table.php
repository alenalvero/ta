<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan')->unsigned()->index('detail_pemesanan_id_pemesanan_index');
            $table->foreign('id_pemesanan','detail_pemesanan_id_pemesanan_foreign')
                ->references('id')->on('pemesanans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('id_wisata')->unsigned()->index('detail_pemesanan_id_wisata_index');
            $table->foreign('id_wisata', 'detail_pemesanan_id_wisata_foreign')
                ->references('id')->on('tempat_wisatas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('detail_pemesanans');
    }
}
