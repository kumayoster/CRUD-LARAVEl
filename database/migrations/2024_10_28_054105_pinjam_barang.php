<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pinjambarang extends Migration
{
    public function up()
    {
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('peminjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali')->nullable();
            $table->unsignedBigInteger('id_barang'); // Ensure it matches 'stok' table
            $table->integer('jml_barang');
            $table->boolean('is_returned')->default(0); // Add the is_returned column
            $table->timestamps();

            // Foreign key constraint referencing 'stok' table
            $table->foreign('id_barang')->references('id_barang')->on('stok')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pinjam_barang');
    }
}
