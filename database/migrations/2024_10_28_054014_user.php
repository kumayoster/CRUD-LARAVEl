<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class user extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
        $table->id('id_user');
        $table->string('nama');
        $table->string('username')->unique();
        $table->string('password');
        $table->string('level');
        $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
