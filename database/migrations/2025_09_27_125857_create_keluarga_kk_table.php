<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keluarga_kk', function (Blueprint $table) {
            $table->id('kk_id');                     // PK
            $table->string('kk_nomor')->unique();    // Nomor KK unik
            $table->unsignedBigInteger('kepala_keluarga_warga_id');  // FK ke warga (bisa nanti)
            $table->string('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keluarga_kk');
    }
};
