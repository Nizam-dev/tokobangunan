<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'user_id',
        'jumlah'
    ];

    public function barang(){
        return $this->belongsTo(barang::class,'barang_id');
    }



}
