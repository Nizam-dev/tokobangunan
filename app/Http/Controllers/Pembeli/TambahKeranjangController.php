<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\keranjang;

class TambahKeranjangController extends Controller
{
    public function tambah_barang(Request $request)
    {

        $keranjang = keranjang::where('user_id',auth()->user()->id)->where('barang_id',$request->barang_id)->first();
        if($keranjang){
            $keranjang->update([
                'jumlah'=> $keranjang->jumlah + $request->jumlah
            ]);
        }else{
            keranjang::create([
                'user_id'=>auth()->user()->id,
                'barang_id'=>$request->barang_id,
                'jumlah'=>$request->jumlah
            ]);
        }

        return redirect('keranjang')->with("success","Barang Berhasil ditambahkan");
    }
}
