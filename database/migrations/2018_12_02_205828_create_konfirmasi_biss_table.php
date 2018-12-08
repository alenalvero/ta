<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasiBissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_biss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan')->unsigned()->index('konfirmasi_pemesanan_index')->nullable();
            $table->foreign('id_pemesanan','konfirmasi_pemesanan_foreign')
                ->references('id')->on('pemesanans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('konfirmasi_biss');
    }
}
