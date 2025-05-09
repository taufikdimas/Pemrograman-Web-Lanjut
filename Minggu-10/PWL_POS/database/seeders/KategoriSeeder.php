<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Food & Beverage'],
            ['kategori_id' => 2, 'kategori_kode' => 'BTY', 'kategori_nama' => 'Beauty & Health'],
            ['kategori_id' => 3, 'kategori_kode' => 'HOME', 'kategori_nama' => 'Home Care'],
            ['kategori_id' => 4, 'kategori_kode' => 'BABY', 'kategori_nama' => 'Baby & Kid'],
            ['kategori_id' => 5, 'kategori_kode' => 'ELEC', 'kategori_nama' => 'Electronics'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
