<?php

namespace App\Models;

use App\Models\Pembeli;
use App\Models\supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\SoftDeletes;
class M_Mahasiswa extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $table ='handphone';

    protected $fillable = [
        'jenis_barang',
        'fitur',
        'harga_jual',
        'jumlah',
        'foto'
    ];

    protected $hidden;

    public function merk()
    {
        return $this->hasMany(Pembeli::class);
    }
    public function supplierr()
    {
        return $this->hasMany(supplier::class);
    }
    public function rating()
    {
        return $this->hasMany(rating::class);
    }
    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class);
    }


}
