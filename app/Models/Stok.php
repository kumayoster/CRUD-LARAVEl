<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $primaryKey = 'id_barang';
    public $timestamps = true;

    protected $fillable = [
        'nama_barang',
        'jml_masuk',
        'jml_keluar',
        'total_barang',
    ];
    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_barang');
    }
}
