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
        Schema::create('m_supplier', function (Blueprint $table) {
            $table->id('supplier_id'); // supplier_id sebagai primary key
            $table->string('supplier_kode', 10)->unique(); // supplier_kode bertipe string dengan panjang 10
            $table->string('supplier_nama', 100); // supplier_nama bertipe string dengan panjang 100
            $table->string('supplier_alamat', 255); // supplier_alamat bertipe string dengan panjang 255
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_supplier');
    }
};
