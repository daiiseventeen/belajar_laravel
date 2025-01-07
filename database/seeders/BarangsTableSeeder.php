<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['id' => '1','nama_barang' => 'SUSU', 'merk' => 'ultra', 'harga' => 10000],
            ['id' => '2','nama_barang' => 'keju', 'merk' => 'risiz', 'harga' => 15000],
            ['id' => '3','nama_barang' => 'kecap', 'merk' => 'bango', 'harga' => 5000],
            ['id' => '4','nama_barang' => 'mie', 'merk' => 'indomie', 'harga' => 2500],
            ['id' => '5','nama_barang' => 'roti', 'merk' => 'aoka', 'harga' => 2500],
          ];
        DB::table('barangs')->insert($barangs);
    }

}
