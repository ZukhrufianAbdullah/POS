<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 1,
                'kode_penjualan' => 'TRX' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'tanggal_penjualan' => now(),
                'total_harga' => rand(20000,100000),
            ]);
        }
    }
}
