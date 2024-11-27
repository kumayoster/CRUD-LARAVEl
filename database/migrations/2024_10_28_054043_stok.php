<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class stok extends Migration
{
    public function up()
    {
        Schema::create('stok', function (Blueprint $table) {
            $table->id('id_barang'); // The central ID
            $table->string('nama_barang'); // Keep only one definition
            $table->integer('jml_masuk');
            $table->integer('jml_keluar');
            $table->integer('total_barang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stok');
    }
}
