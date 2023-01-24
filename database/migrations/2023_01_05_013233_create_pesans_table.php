<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penerima_id');
            $table->foreign('penerima_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('pengirim_id');
            $table->foreign('pengirim_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('judul', 50);
            $table->text('isi');
            $table->enum('status', ['terkirim', 'terbaca'])->nullable();
            $table->dateTime('tanggal_kirim');
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
        Schema::dropIfExists('pesans');
    }
}
