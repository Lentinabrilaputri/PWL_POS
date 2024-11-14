<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Transaksi Penjualan
            [
                'penjualan_id' => 1,
                'user_id' => 1,  
                'pembeli' => 'Puji',
                'penjualan_kode' => 'PNJ001',
                'penjualan_tanggal' => Carbon::parse('2024-11-01')->format('Y-m-d'),  // Tanggal 1 November 2024
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,  
                'pembeli' => 'Julian',
                'penjualan_kode' => 'PNJ002',
                'penjualan_tanggal' => Carbon::parse('2024-11-02'), 
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3, 
                'pembeli' => 'Citra',
                'penjualan_kode' => 'PNJ003',
                'penjualan_tanggal' => Carbon::parse('2024-11-03'), 
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,  
                'pembeli' => 'Lentina',
                'penjualan_kode' => 'PNJ004',
                'penjualan_tanggal' => Carbon::parse('2024-11-04'),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,  
                'pembeli' => 'Abrila',
                'penjualan_kode' => 'PNJ005',
                'penjualan_tanggal' => Carbon::parse('2024-11-05'),  
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,  
                'pembeli' => 'Fajar',
                'penjualan_kode' => 'PNJ006',
                'penjualan_tanggal' => Carbon::parse('2024-11-06'),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1, 
                'pembeli' => 'Gina',
                'penjualan_kode' => 'PNJ007',
                'penjualan_tanggal' => Carbon::parse('2024-11-07'), 
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,  
                'pembeli' => 'Putri',
                'penjualan_kode' => 'PNJ008',
                'penjualan_tanggal' => Carbon::parse('2024-11-08'),  
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3, 
                'pembeli' => 'Rafandra',
                'penjualan_kode' => 'PNJ009',
                'penjualan_tanggal' => Carbon::parse('2024-11-09'),  
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1, 
                'pembeli' => 'Prabowo',
                'penjualan_kode' => 'PNJ010',
                'penjualan_tanggal' => Carbon::parse('2024-11-10'), 
            ]
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
