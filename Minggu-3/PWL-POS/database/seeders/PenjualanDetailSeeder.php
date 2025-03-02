<?php
namespace Database\Seeders;

use Carbon\Carbon;
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
                    // 'detail_id' tidak perlu di-set karena auto-increment
                    'penjualan_id' => $i,
                    'barang_id'    => rand(1, 10),
                    'harga'        => rand(5000, 7500000),
                    'jumlah'       => rand(3, 3),
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}