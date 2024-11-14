<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data barang untuk 5 supplier
        $data = [
            // Barang dari Supplier 1 (Elektronik)
            [
                'barang_id' => 1,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Televisi 40 inch',
                'harga_beli' => 3500000,
                'harga_jual' => 4500000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kulkas 200L',
                'harga_beli' => 3500000,
                'harga_jual' => 4850000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Microwave Samsung',
                'harga_beli' => 1899000,
                'harga_jual' => 1999000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Blender Philips',
                'harga_beli' => 350000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Rice Cooker',
                'harga_beli' => 400000,
                'harga_jual' => 600000,
            ],
            
            // Barang dari Supplier 2 (Makanan Ringan)
            [
                'barang_id' => 6,
                'kategori_id' => 2, // Makanan Ringan
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Chips Balado',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2, // Makanan Ringan
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Popcorn Rasa Caramel',
                'harga_beli' => 4000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2, // Makanan Ringan
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Kacang Polong',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2, // Makanan Ringan
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Makaroni Pedas',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2, // Makanan Ringan
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Keripik Buah',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            
            // Barang dari Supplier 3 (Buku)
            [
                'barang_id' => 11,
                'kategori_id' => 3, // Buku
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Rindu TERE LIYE',
                'harga_beli' => 60000,
                'harga_jual' => 70000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3, // Buku
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Komet TERE LIYE',
                'harga_beli' => 80000,
                'harga_jual' => 94400,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3, // Buku
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Rembulan Tenggelam Di Wajahmu TERE LIYE',
                'harga_beli' => 65000,
                'harga_jual' => 90000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3, // Buku
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Javascript untuk Pemula',
                'harga_beli' => 70000,
                'harga_jual' => 95000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3, // Buku
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Jingga dan Senja ',
                'harga_beli' => 60000,
                'harga_jual' => 99000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
