<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluarSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => 1,
                'tgl_keluar' => '2024-12-04', 
                'jml_keluar' => 1,
                'lokasi' => 'rumahsaya',
                'penerima' => 'Surya',
            ],
            [
                'id_barang' => 2,
                'tgl_keluar' => '2024-12-04', 
                'jml_keluar' => 1,
                'lokasi' => 'rumahsaya',
                'penerima' => 'Surya',
            ]
        ]);
    }
}
