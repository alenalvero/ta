<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->index('pemesanan_user_index');
            $table->foreign('id_user','pemesanan_user_foreign')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_pelanggan')->nullable();
            $table->string('alamat');
            $table->string('no_telp');
            $table->integer('jumlah_orang');
            $table->integer('id_trayek')->unsigned()->index('pemesanan_trayek_index')->nullable();
            $table->foreign('id_trayek','pemesanan_trayek_foreign')
                ->references('id')->on('trayeks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('id_bis')->unsigned()->index('pemesanan_bis_index')->nullable();
            $table->foreign('id_bis','pemesanan_bis_foreign')
                ->references('id')->on('biss')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('tgl');
            $table->string('status');
            $table->string('jumlah_total');

            $table->integer('id_konfirmasi')->unsigned()->index('pemesanan_konfirmasi_index')->nullable();
            $table->foreign('id_konfirmasi','pemesanan_konfirmasi_foreign')
                ->references('id')->on('konfirmasi_pembayarans')
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
        Schema::dropIfExists('pemesanans');
    }
}
