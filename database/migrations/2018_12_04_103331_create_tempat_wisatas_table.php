<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempatWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_kota')->unsigned()->index('wisata_kota_index')->nullable();
            $table->foreign('id_kota','wisata_kota_foreign')
                ->references('id')->on('kotas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('harga');



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
        Schema::dropIfExists('tempat_wisatas');
    }
}
