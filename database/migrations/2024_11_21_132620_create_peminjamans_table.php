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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50);
            $table->string('nama_peminjam', 50);
            $table->bigInteger('id_barang');
            $table->bigInteger('no_telp');
            $table->string('peminjam', 50);
            $table->string('keperluan', 50);
            $table->date('tgl_pinjam');
            $table->string('dari', 50);
            $table->string('sampai', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
