<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class barang extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang'); // Use unsignedBigInteger
            $table->string('nama_barang');
            $table->string('spesifikasi');
            $table->string('lokasi');
            $table->string('kondisi');
            $table->integer('jumlah_barang');
            $table->string('sumber_dana');
            $table->timestamps();
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
