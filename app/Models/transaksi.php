<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    // status [pending,pembayaran,proses,ditolak,selesai]
    use HasFactory;
    protected $fillable = [
        'kode_transaksi',
        'total',
        'status',
        'user_id',
        'etimasi_ready',
        'etimasi_dikirim',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function pesanan(){
        return $this->hasMany(pesanan::class)->with('barang');
    }

    public function pembayaran(){
        return $this->hasOne(pembayaran::class)->with('bank');
    }



}
