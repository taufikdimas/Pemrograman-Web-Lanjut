<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan stok untuk setiap barang dari BarangSeeder
        DB::table('t_stok')->insert([
            [
                'barang_id'    => 1, // Kopi Lawak
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 50, // Stok awal 50
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 2, // Teh Matcha
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 100, // Stok awal 100
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 3, // Facial Wash
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 75, // Stok awal 75
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 4, // Body Serum
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 80, // Stok awal 80
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 5, // Sunlight
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 60, // Stok awal 60
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 6, // Rinso
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 90, // Stok awal 90
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 7, // Susu Formula
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 40, // Stok awal 40
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 8, // Popok Bayi
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 30, // Stok awal 30
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 9, // Iphone 20 Promag
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 10, // Stok awal 10
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'barang_id'    => 10, // Laptop LOQ
                'user_id'      => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah'  => 5, // Stok awal 5
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
        ]);
    }
}