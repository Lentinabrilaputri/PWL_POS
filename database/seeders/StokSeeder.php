<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Stok untuk barang dari Supplier 1 (PT. Cahaya Sejahtera)
            [
                'stok_id' => 1,
                'supplier_id' => 1,  
                'barang_id' => 1,    
                'user_id' => 1,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 2,
                'supplier_id' => 1,  
                'barang_id' => 2,    
                'user_id' => 2,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),  
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 3,
                'supplier_id' => 1,  
                'barang_id' => 3,    
                'user_id' => 3,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),  
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 4,
                'supplier_id' => 1,  
                'barang_id' => 4,   
                'user_id' => 1,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),  
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 5,
                'supplier_id' => 1, 
                'barang_id' => 5,   
                'user_id' => 2,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),  
                'stok_jumlah' => 60,
            ],

            // Stok untuk barang dari Supplier 2 (CV. Maju Makmur)
            [
                'stok_id' => 6,
                'supplier_id' => 2,  
                'barang_id' => 6,    
                'user_id' => 1,     
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 7,
                'supplier_id' => 2,  
                'barang_id' => 7,    
                'user_id' => 2,      
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 8,
                'supplier_id' => 2,  
                'barang_id' => 8,    
                'user_id' => 3,     
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 80,
            ],
            [
                'stok_id' => 9,
                'supplier_id' => 2,  
                'barang_id' => 9,    
                'user_id' => 1,      
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 10,
                'supplier_id' => 2,  
                'barang_id' => 10,   
                'user_id' => 2,      
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 100,
            ],

            // Stok untuk barang dari Supplier 3 (PT. Langgeng Jaya)
            [
                'stok_id' => 11,
                'supplier_id' => 3,  
                'barang_id' => 11,   
                'user_id' => 3,      
                'stok_tanggal' => Carbon::parse('2024-11-16'),  
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 12,
                'supplier_id' => 3,  
                'barang_id' => 12,   
                'user_id' => 1,      
                'stok_tanggal' => Carbon::parse('2024-11-08'), 
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 13,
                'supplier_id' => 3, 
                'barang_id' => 13,   
                'user_id' => 2,     
                'stok_tanggal' => Carbon::parse('2024-11-10'), 
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 14,
                'supplier_id' => 3, 
                'barang_id' => 14,   
                'user_id' => 3,      
                'stok_tanggal' => Carbon::parse('2024-11-14'),  
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 15,
                'supplier_id' => 3, 
                'barang_id' => 15,   
                'user_id' => 1,     
                'stok_tanggal' => Carbon::parse('2024-11-15'),  
                'stok_jumlah' => 70,
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}
