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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Biskuit Roma Kelapa',
                'harga_beli' => 4500,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Sari Roti',
                'harga_beli' => 6000,
                'harga_jual' => 7500,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 3500,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Aqua 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kopi Golda',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Pensil 2B',
                'harga_beli' => 500,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Lampu LED',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Charger Hp',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Stopkontak',
                'harga_beli' => 18000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sabun Lifebuoy',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Shampoo Clear',
                'harga_beli' => 7000,
                'harga_jual' => 9500,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Pasta gigi Pepsodent',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
