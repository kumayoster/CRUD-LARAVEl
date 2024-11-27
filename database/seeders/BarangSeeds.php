<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeds extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id_barang' => '1',
                'nama_barang' => 'sampo',
                'spesifikasi' => 'ada kipasnya',
                'lokasi' => 'rumahsaya',
                'kondisi' => 'bagus',
                'jumlah_barang' => '10',
                'sumber_dana' => '100000',
            ],
            [
                'id_barang' => '2',
                'nama_barang' => 'sabun',
                'spesifikasi' => 'ada acnya',
                'lokasi' => 'rumahbagus',
                'kondisi' => 'yagitlah',
                'jumlah_barang' => '20',
                'sumber_dana' => '100000',
            ]
            ]);
    }
}
