<?php

namespace App\Models;

use App\Models\supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    protected $table ='barang';
    use HasFactory;


    protected $fillable = [
        'barang_masuk',
        'jumlah',
        'barang_keluar',
        'jumlahh'
    ];

    public function supplier()
    {
        return $this->belongsTo(supplier::class,'barang_masuk', 'id');
    }

}
