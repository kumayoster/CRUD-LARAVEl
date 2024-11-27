<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StokSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stok')->insert([
            [
                'id_barang' => '1',
                'nama_barang' => 'sampo',
                'jml_masuk' => '10',
                'jml_keluar' => '1',
                'total_barang' => '11',
            ],
            [
                'id_barang' => '2',
                'nama_barang' => 'sabun',
                'jml_masuk' => '20',
                'jml_keluar' => '11',
                'total_barang' => '20',
            ]
        ]);
   }
}
