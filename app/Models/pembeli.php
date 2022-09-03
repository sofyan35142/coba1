<?php

namespace App\Models;
use App\Models\supplier;
use App\Models\M_Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pembeli extends Model
{
    use HasFactory;
    protected $table ='pembelis';

    protected $fillable = [
        'nama',
        'handphone_id',
        'harga',
        'foto',
    ];

    // public function idmerk()
    // {
    //     return $this->belongsTo(supplier::class,'merk','id');
    // }
    public function idmerk()
    {
        return $this->belongsTo(M_Mahasiswa::class,'handphone_id','id');
    }
}
