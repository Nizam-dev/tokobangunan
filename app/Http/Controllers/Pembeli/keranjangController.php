<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keranjang;
use App\Models\alamat;
use App\Models\pembayaran;

class keranjangController extends Controller
{
    public function index()
    {
        $keranjangs = keranjang::where('user_id',auth()->user()->id)->get();
        return view('pembeli.keranjang',compact('keranjangs'));
    }

    public function hapus_barang($id)
    {
        keranjang::findOrFail($id)->delete();
        return redirect()->back()->with("success","Barang Berhasil Dihapus");
    }

    public function bayar()
    {
        $alamat = alamat::where("user_id",auth()->user()->id)->first();
        $keranjangs = keranjang::where('user_id',auth()->user()->id)->get();
        $pembayarans = pembayaran::all();
        if($keranjangs->isEmpty()){
            return redirect()->back()->with("failed","Harap tambahkan barang");
        }
        if(!$alamat){
            return redirect("alamat")->with("failed","Harap isi alamat terlebih dahulu");
        }

        return view("pembeli.konfirmasi_pembayaran",compact('keranjangs','pembayarans'));
    }
}
