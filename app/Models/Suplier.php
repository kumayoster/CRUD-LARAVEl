<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    public $incrementing = true;
    protected $keyType = 'int';
    
    public $timestamps = true;

    protected $fillable = ['id_suplier', 'nama_supplier', 'alamat_supplier', 'telp_supplier'];
}
