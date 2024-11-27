<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBarang extends Model
{
    use HasFactory;

    // Specify the table name if it doesn’t follow Laravel's naming convention
    protected $table = 'pinjam_barang';

    // Set the primary key if it’s not 'id'
    protected $primaryKey = 'id_pinjam';

    // Specify that the primary key is auto-incrementing
    public $incrementing = true;

    // Define the fields that are mass assignable
    protected $fillable = [
        'peminjam',
        'tgl_pinjam',
        'tgl_kembali',
        'id_barang',
        'jml_barang',
        'is_returned', // Add is_returned to the fillable fields
    ];

    // Define the relationship with the 'Stok' model
    public function stok()
    {
        return $this->belongsTo(Stok::class, 'id_barang', 'id_barang');
    }
}
