<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_pembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan_paket')->unsigned()->index('konfirmasiPaket_index');
            $table->foreign('id_pemesanan_paket','konfirmasiPaket_foreign')
                ->references('id')->on('pemesanan_paket_tours')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('foto');
            $table->string('status');
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
        Schema::dropIfExists('konfirmasi_pembayarans');
    }
}
