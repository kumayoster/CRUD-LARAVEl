<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pinjam_barang')->insert([
            [
                'id_pinjam' => '1',
                'peminjam' => 'hansen',
                'tgl_pinjam' => '2023/4/20',
                'tgl_kembali' => '2023/4/20',
                'id_barang' => '1',
                'jml_barang' => '1',
            ],
            [
                'id_pinjam' => '2',
                'peminjam' => 'hansens',
                'tgl_pinjam' => '2023/4/20',
                'tgl_kembali' => '2023/4/20',
                'id_barang' => '2',
                'jml_barang' => '1',
            ]
            ]);
    }
}
