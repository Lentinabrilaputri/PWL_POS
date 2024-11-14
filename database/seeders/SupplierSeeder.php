<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Cahaya Sejahtera',
                'supplier_alamat' => 'Jl. Soedirman No. 10, Jakarta, Indonesia',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Maju Makmur',
                'supplier_alamat' => 'Jl. Soekarno No. 15, Surabaya, Indonesia',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT. Langgeng Jaya',
                'supplier_alamat' => 'Jl. Pahlawan No. 20, Bandung, Indonesia',
            ],
        ]);
    }
}
