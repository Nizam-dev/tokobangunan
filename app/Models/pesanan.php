<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'harga',
        'jumlah',
        'barang_id',
        'transaksi_id'
    ];

    public function barang(){
        return $this->belongsTo(barang::class,'barang_id');
    }
}
