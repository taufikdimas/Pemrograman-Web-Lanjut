<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) { // 10 transaksi penjualan
            for ($j = 1; $j <= 3; $j++) {  // 3 barang per transaksi penjualan
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id'    => rand(1, 10),         // Random ID barang
                    'harga'        => rand(5000, 7500000), // Harga acak
                    'jumlah'       => rand(1, 10),         // Rentang jumlah barang yang lebih realistis
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
