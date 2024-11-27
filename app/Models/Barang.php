<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'barang';

    // Set the primary key if it’s not 'id'
    protected $primaryKey = 'id_barang';

    // Indicate that the primary key is not auto-incrementing, if needed
    public $incrementing = false;

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'nama_barang',
        'spesifikasi',
        'lokasi',
        'kondisi',
        'jumlah_barang',
        'sumber_dana',
    ];

    // Define the relationship with the 'stok' table
    public function stok()
    {
        return $this->belongsTo(Stok::class, 'id_barang', 'id_barang');
    }
    
}
