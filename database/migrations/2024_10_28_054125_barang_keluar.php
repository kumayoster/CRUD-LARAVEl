<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class barangkeluar extends Migration
{
    public function up()
    {
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id(); // Automatically creates 'id' column
            $table->unsignedBigInteger('id_barang'); // Foreign key to 'barang' table
            $table->date('tgl_keluar'); // Date of the outgoing item
            $table->integer('jml_keluar'); // Quantity of items leaving
            $table->string('lokasi'); // Location where the item is sent
            $table->string('penerima'); // Receiver of the items
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->timestamps(); // Automatically adds created_at and updated_at columns
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_keluar');
    }
}
