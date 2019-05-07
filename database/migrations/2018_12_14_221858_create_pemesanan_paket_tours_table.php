<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananPaketToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_paket_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->index('pemesananPaket_user_index');
            $table->foreign('id_user','pemesananPaket_user_foreign')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_pelanggan_paket');
            $table->string('alamat');
            $table->string('no_telp');
            $table->integer('id_paket')->unsigned()->index('pemesananPaket_paket_index')->nullable();
            $table->foreign('id_paket','pemesananPaket_paket_foreign')
                ->references('id')->on('paket_tours')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('tgl');  
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
        Schema::dropIfExists('pemesanan_paket_tours');
    }
}
