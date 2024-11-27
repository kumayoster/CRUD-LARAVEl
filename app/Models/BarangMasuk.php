<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'barang_masuk';

    // Define the fields that are mass assignable
    protected $fillable = [
        'id_barang',
        'tgl_masuk',
        'jml_masuk',
        'id_supplier',
    ];

    // Relationship with the 'Barang' model
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }

    // Relationship with the 'Supplier' model
    public function supplier()
    {
        return $this->belongsTo(Suplier::class, 'id_supplier', 'id_supplier');
    }
}
