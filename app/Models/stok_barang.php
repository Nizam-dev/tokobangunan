<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok_barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'jumlah',
        'barang_id'
    ];

    public function barang(){
        return $this->belongsTo(barang::class,'barang_id');
    }
}
