<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesanan;
use DB;

class LaporanPenjualanController extends Controller
{
    public function index()
    {
        $datas = pesanan::laporan_penjualan();
        return view('admin.laporan.penjualan',compact('datas'));
    }
}
