<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('bertemu');
            $table->string('asal_instansi');
            $table->string('keperluan_tamu');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->bigInteger('telepon');
            $table->dateTime('waktu_datang')->default(now());
            $table->dateTime('kunjungan _berakhir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
