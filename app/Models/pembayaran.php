<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'bukti_pembayaran',
        'transaksi_id',
        'metode_pembayaran_id'
    ];
}
