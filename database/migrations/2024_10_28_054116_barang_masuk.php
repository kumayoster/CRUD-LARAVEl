<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class barangmasuk extends Migration
{
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->date('tgl_masuk');
            $table->integer('jml_masuk');
            $table->unsignedBigInteger('id_supplier');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
}
