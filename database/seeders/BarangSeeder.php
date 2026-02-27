<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('m_barang')->insert([
                'kategori_id' => rand(1,5),
                'supplier_id' => rand(1,3),
                'barang_kode' => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => rand(1000,5000),
                'harga_jual' => rand(6000,10000),
            ]);
        }
    }
}
