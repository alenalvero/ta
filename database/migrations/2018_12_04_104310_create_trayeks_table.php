<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrayeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayeks', function (Blueprint $table) {
           $table->increments('id');
            $table->string('asal');
            $table->integer('id_kota')->unsigned()->index('trayek_kota_index')->nullable();
            $table->foreign('id_kota','trayek_kota_foreign')
                ->references('id')->on('kotas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('id_tempat_wisata')->unsigned()->index('trayek_wisata_index')->nullable();
            $table->foreign('id_tempat_wisata','trayek_wisata_foreign')
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
        Schema::dropIfExists('trayeks');
    }
}
