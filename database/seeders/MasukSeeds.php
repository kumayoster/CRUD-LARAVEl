<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasukSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 1,
                'tgl_masuk' => '2024-11-04', 
                'jml_masuk' => 100,
                'id_supplier' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'tgl_masuk' => '2024-11-04', 
                'jml_masuk' => 150, 
                'id_supplier' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
