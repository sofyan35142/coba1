<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $table ='ratings';

    protected $fillable = [
        'handphone_id',
        'nilai',
        'masukkan'
    ];
    public function idrating()
    {
        return $this->belongsTo(M_Mahasiswa::class,'handphone_id','id');
    }
}
