<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel t_stok.
     */
    public function up(): void
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // ID stok
            $table->unsignedBigInteger('supplier_id'); // ID supplier
            $table->unsignedBigInteger('barang_id'); // ID barang
            $table->unsignedBigInteger('user_id'); // ID pengguna yang mengelola stok
            $table->date('stok_tanggal'); // Tanggal stok
            $table->integer('stok_jumlah'); // Jumlah stok yang tersedia
            $table->timestamps();

            // Menambahkan relasi ke tabel supplier, barang, dan user
            $table->foreign('supplier_id')->references('supplier_id')->on('m_supplier')
                  ->onDelete('cascade');  // Jika supplier dihapus, stok terkait juga akan terhapus

            $table->foreign('barang_id')->references('barang_id')->on('m_barang')
                  ->onDelete('cascade');  // Jika barang dihapus, stok terkait juga akan terhapus

            $table->foreign('user_id')->references('user_id')->on('m_user')
                  ->onDelete('cascade');  // Jika user dihapus, stok terkait juga akan terhapus
        });
    }

    /**
     * Membatalkan migrasi dengan menghapus tabel t_stok.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};