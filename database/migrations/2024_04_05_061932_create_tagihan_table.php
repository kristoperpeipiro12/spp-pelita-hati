<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->bigIncrements('idtagihan');
            $table->unsignedBigInteger('nis');
            $table->string('nama');
            $table->string('keterangan');
            $table->string('tunggakan');
            $table->date('jatuhtempo');
            
            $table->timestamps();
        });

        Schema::table('tagihan', function (Blueprint $table) {
            $table->foreign('nis')->references('nis')->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tagihan', function (Blueprint $table) {
            $table->dropForeign(['nis']);
        });

        Schema::dropIfExists('tagihan');
    }
}
