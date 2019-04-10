<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPulau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pulau', function (Blueprint $table) {
            $table->bigIncrements('id_pulau');
            $table->string('nama_pulau', 50);
            $table->string('gambar_pulau');
            $table->enum('status', ['for rent', 'for sale']);
            $table->integer('luas');
            $table->string('nama_negara');
            $table->string('lokasi');
            $table->bigInteger('harga');
            $table->text('deskripsi');
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
        Schema::dropIfExists('tb_pulau');
    }
}
