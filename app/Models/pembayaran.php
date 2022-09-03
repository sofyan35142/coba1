<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table ='pembayarans';

    protected $fillable = [
        'handphone_id',
        'bayar',
    ];
    public function idpembayaran()
    {
        return $this->belongsTo(M_Mahasiswa::class,'handphone_id','id');
    }
}
