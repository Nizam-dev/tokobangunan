<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesanan;
use App\Models\barang;
use App\Models\transaksi;
use App\Models\modal;
use App\Models\User;
use DB;
use Carbon\Carbon;

class LaporanPenjualanController extends Controller
{
    public function index()
    {
        $datas = pesanan::laporan_penjualan();
        return view('admin.laporan.penjualan',compact('datas'));
    }

    public function barang()
    {
        $datas = barang::laporan_barang();
        return view('admin.laporan.barang',compact('datas'));
    }

    public function user()
    {
        $datas = user::where('role','pembeli')->get();
        return view('admin.laporan.user',compact('datas'));
    }

    public function laba()
    {
        $datas = modal::laporan();
        return view('admin.laporan.laba',compact('datas'));
    }

    public function tambah_modal(Request $request)
    {
        $bulan = new Carbon($request->tahun.'-'.$request->bulan.'-01');
        modal::create([
            'modal'=>$request->modal,
            'bulan'=>$bulan
        ]);
        return redirect()->back()->with('success','Berhasil Menambahkan Modal');
    }

}
