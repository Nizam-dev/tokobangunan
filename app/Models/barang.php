<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barang extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama_barang',
        'status',
        'harga',
        'jumlah_barang',
        'satuan_barang',
        'kategori_barang_id',
        'foto_barang',
        'deskripsi'
    ];

    protected $dates = ['deleted_at'];

    public function kategori_barang(){
        return $this->belongsTo(kategori_barang::class,'kategori_barang_id');
    }
}
