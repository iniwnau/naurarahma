<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keluarga_kk', function (Blueprint $table) {
            $table->increments('kk_id');              // Primary key
            $table->string('kk_nomor')->unique();    // Nomor KK
            $table->string('kepala_keluarga');       // Kepala keluarga
            $table->string('alamat');                // Alamat
            $table->string('rt');                    // RT
            $table->string('rw');                    // RW
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keluarga_kk');
    }
};



