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
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id('kategori_id'); // Tabel ini menggunakan id sebagai primary key
            $table->string('kategori_kode', 10)->unique(); // kategori_kode bertipe string dengan panjang 10
            $table->string('kategori_nama', 100); // kategori_nama bertipe string dengan panjang 100
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kategori');
    }
    
};
