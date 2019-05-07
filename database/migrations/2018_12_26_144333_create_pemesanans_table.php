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
            $table->integer('id_user')->unsigned()->index('pemesanan_user_index')->nullable();
            $table->foreign('id_user','pemesanan_user_foreign')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_pelanggan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('jumlah_orang')->nullable();
            $table->integer('id_kota')->nullable();
            $table->integer('id_bis')->unsigned()->index('pemesanan_bis_index')->nullable();
            $table->foreign('id_bis','pemesanan_bis_foreign')
                ->references('id')->on('biss')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('tgl')->nullable();
            $table->string('jumlah_total')->nullable();
            
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
