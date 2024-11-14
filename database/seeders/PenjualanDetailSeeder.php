<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjualan_details = [
            // Transaksi Penjualan 1
            [
                'detail_id' =>1,
                'penjualan_id' => 1,
                'barang_id' => 1, // Televisi 40 inch
                'harga' => 4500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>2,
                'penjualan_id' => 1,
                'barang_id' => 2, // Kulkas 200L
                'harga' => 4850000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>3,
                'penjualan_id' => 1,
                'barang_id' => 3, // Microwave Samsung
                'harga' => 1999000,
                'jumlah' => 1,
            ],

            // Transaksi Penjualan 2
            [
                'detail_id' =>4,
                'penjualan_id' => 2,
                'barang_id' => 4, // Blender Philips
                'harga' => 500000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>5,
                'penjualan_id' => 2,
                'barang_id' => 5, // Rice Cooker
                'harga' => 600000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>6,
                'penjualan_id' => 2,
                'barang_id' => 6, // Chips Balado
                'harga' => 8000,
                'jumlah' => 5,
            ],

            // Transaksi Penjualan 3
            [
                'detail_id' =>7,
                'penjualan_id' => 3,
                'barang_id' => 7, // Popcorn Rasa Caramel
                'harga' => 7000,
                'jumlah' => 3,
            ],
            [
                'detail_id' =>8,
                'penjualan_id' => 3,
                'barang_id' => 8, // Kacang Polong
                'harga' => 12000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>9,
                'penjualan_id' => 3,
                'barang_id' => 9, // Makaroni Pedas
                'harga' => 8000,
                'jumlah' => 4,
            ],

            // Transaksi Penjualan 4
            [
                'detail_id' =>10,
                'penjualan_id' => 4,
                'barang_id' => 10, // Keripik Buah
                'harga' => 15000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>11,
                'penjualan_id' => 4,
                'barang_id' => 11, // Rindu TERE LIYE
                'harga' => 70000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>12,
                'penjualan_id' => 4,
                'barang_id' => 12, // Komet TERE LIYE
                'harga' => 94400,
                'jumlah' => 1,
            ],

            // Transaksi Penjualan 5
            [
                'detail_id' =>13,
                'penjualan_id' => 5,
                'barang_id' => 13, // Rembulan Tenggelam Di Wajahmu TERE LIYE
                'harga' => 90000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>14,
                'penjualan_id' => 5,
                'barang_id' => 14, // Javascript untuk Pemula
                'harga' => 95000,
                'jumlah' => 3,
            ],
            [
                'detail_id' =>15,
                'penjualan_id' => 5,
                'barang_id' => 15, // Jingga dan Senja
                'harga' => 99000,
                'jumlah' => 2,
            ],

            // Transaksi Penjualan 6
            [
                'detail_id' =>16,
                'penjualan_id' => 6,
                'barang_id' => 1, // Televisi 40 inch
                'harga' => 4500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>17,
                'penjualan_id' => 6,
                'barang_id' => 2, // Kulkas 200L
                'harga' => 4850000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>18,
                'penjualan_id' => 6,
                'barang_id' => 3, // Microwave Samsung
                'harga' => 1999000,
                'jumlah' => 1,
            ],

            // Transaksi Penjualan 7
            [
                'detail_id' =>19,
                'penjualan_id' => 7,
                'barang_id' => 4, // Blender Philips
                'harga' => 500000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>20,
                'penjualan_id' => 7,
                'barang_id' => 5, // Rice Cooker
                'harga' => 600000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>21,
                'penjualan_id' => 7,
                'barang_id' => 6, // Chips Balado
                'harga' => 8000,
                'jumlah' => 5,
            ],

            // Transaksi Penjualan 8
            [
                'detail_id' =>22,
                'penjualan_id' => 8,
                'barang_id' => 7, // Popcorn Rasa Caramel
                'harga' => 7000,
                'jumlah' => 3,
            ],
            [
                'detail_id' =>23,
                'penjualan_id' => 8,
                'barang_id' => 8, // Kacang Polong
                'harga' => 12000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>24,
                'penjualan_id' => 8,
                'barang_id' => 9, // Makaroni Pedas
                'harga' => 8000,
                'jumlah' => 4,
            ],

            // Transaksi Penjualan 9
            [
                'detail_id' =>25,
                'penjualan_id' => 9,
                'barang_id' => 10, // Keripik Buah
                'harga' => 15000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>26,
                'penjualan_id' => 9,
                'barang_id' => 11, // Rindu TERE LIYE
                'harga' => 70000,
                'jumlah' => 1,
            ],
            [
                'detail_id' =>27,
                'penjualan_id' => 9,
                'barang_id' => 12, // Komet TERE LIYE
                'harga' => 94400,
                'jumlah' => 1,
            ],

            // Transaksi Penjualan 10
            [
                'detail_id' =>28,
                'penjualan_id' => 10,
                'barang_id' => 13, // Rembulan Tenggelam Di Wajahmu TERE LIYE
                'harga' => 90000,
                'jumlah' => 2,
            ],
            [
                'detail_id' =>29,
                'penjualan_id' => 10,
                'barang_id' => 14, // Javascript untuk Pemula
                'harga' => 95000,
                'jumlah' => 3,
            ],
            [
                'detail_id' =>30,
                'penjualan_id' => 10,
                'barang_id' => 15, // Jingga dan Senja
                'harga' => 99000,
                'jumlah' => 2,
            ],
        ];

        // Insert data ke tabel t_penjualan_detail
        DB::table('t_penjualan_detail')->insert($penjualan_details);
    }
}
