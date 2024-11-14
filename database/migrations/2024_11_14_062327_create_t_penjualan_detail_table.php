<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel t_penjualan_detail.
     */
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id'); // ID detail penjualan (primary key)
            $table->unsignedBigInteger('penjualan_id'); // ID penjualan (foreign key)
            $table->unsignedBigInteger('barang_id'); // ID barang (foreign key)
            $table->integer('harga'); // Harga per unit barang
            $table->integer('jumlah'); // Jumlah barang yang dijual
            $table->timestamps();

            // Relasi ke tabel t_penjualan (penjualan_id)
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan')
                  ->onDelete('cascade');  // Jika penjualan dihapus, detail terkait juga akan terhapus

            // Relasi ke tabel m_barang (barang_id)
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')
                  ->onDelete('cascade');  // Jika barang dihapus, detail terkait juga akan terhapus
        });
    }

    /**
     * Membatalkan migrasi dengan menghapus tabel t_penjualan_detail.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};