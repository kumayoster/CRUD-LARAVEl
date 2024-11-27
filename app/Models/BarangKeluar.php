<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'barang_keluar';

    // Define the fields that are mass assignable
    protected $fillable = [
        'id_barang',
        'tgl_keluar',
        'jml_keluar',
        'lokasi',
        'penerima',
    ];

    // Define a relationship with the 'Barang' model (not Stok, if that's your intention)
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
?>