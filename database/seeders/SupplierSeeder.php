<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Supplier A',
                'supplier_alamat' => 'Jl. Mawar No. 1, Malang'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Supplier B',
                'supplier_alamat' => 'Jl. Melati No. 2, Kediri'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Supplier C',
                'supplier_alamat' => 'Jl. Kenanga No. 3, Batu'
            ]
        ];
        DB::table('m_supplier')->insert($data);
    }
}
