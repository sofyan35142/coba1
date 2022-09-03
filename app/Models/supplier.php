<?php

namespace App\Models;

use App\Models\barang;
use App\Models\pembeli;
use App\Models\M_Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class supplier extends Model
{
    use HasFactory;
    protected $table ='supplier';

    protected $fillable = [
        'nama_supplier',
        'jenis_barang',
        'fitur',
        'jumlah',
        'harga_beli',
        'hargatotal',
        'notelp',
        'alamat',
    ];


    // public function bismillah()
    // {
    //     return $this->hasMany(barang::class);
    // }

    public function idsupplier()
    {
        return $this->belongsTo(M_Mahasiswa::class, 'jenis_barang', 'id');
    }
    public function pembeli()
    {
        return $this->hasMany(pembeli::class);
    }
}
