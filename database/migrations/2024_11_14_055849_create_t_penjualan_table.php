<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel t_penjualan.
     */
    public function up(): void
    {
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // ID penjualan
            $table->unsignedBigInteger('user_id'); // ID pengguna yang melakukan penjualan
            $table->string('pembeli', 50); // Nama pembeli, dengan panjang maksimal 50 karakter
            $table->string('penjualan_kode', 20); // Kode penjualan, dengan panjang maksimal 20 karakter
            $table->dateTime('penjualan_tanggal'); // Tanggal dan waktu penjualan
            $table->timestamps();
            
            $table->foreign('user_id')->references('user_id')->on('m_user')
                  ->onDelete('cascade');  // Jika user dihapus, maka penjualan terkait juga akan terhapus
        });
    }

    /**
     * Membatalkan migrasi dengan menghapus tabel t_penjualan.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};