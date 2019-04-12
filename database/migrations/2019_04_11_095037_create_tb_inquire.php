<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbInquire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inquire', function (Blueprint $table) {
            $table->bigIncrements('id_inquire');
            $table->integer('user_id');
            $table->integer('id_pulau');
            $table->integer('total_orang');
            $table->date('tanggal');
            $table->text('pesan');
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
        Schema::dropIfExists('tb_inquire');
    }
}
