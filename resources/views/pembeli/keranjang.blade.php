@extends('shop.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/coloshop/styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/coloshop/styles/categories_responsive.css')}}">

<style>
    .account {
        background: none;
    }
    .btn {
        cursor: pointer;
    }
</style>
@endsection

@section('content')



<div class="container product_section_container mb-5">
    <div class="row">
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-angle-right"
                                aria-hidden="true"></i>Keranjang</a></li>
                </ul>
            </div>

            <!-- Sidebar -->

            <div class="sidebar">
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Akun</h5>
                    </div>
                    <ul class="sidebar_categories">
                        <li class="active"><a href="{{url('keranjang')}}">Keranjang</a></li>
                        <li><a href="{{url('pesanan')}}">Pesanan</a></li>
                        <li><a href="{{url('histori-pesanan')}}">Histori Pemesanan</a></li>
                        <li><a href="{{url('alamat')}}">Alamat</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->

            <div class="main_content">

                <!-- Products -->

                <div class="products_iso">
                    <div class="row">
                        <div class="col">

                            <!-- Product Sorting -->

                            <div class="product_sorting_container product_sorting_container_top py-2 mb-4">
                                
                            <a href="{{url('')}}" class="btn btn-sm btn-primary float-right">Tambah Barang</a>

                            </div>

                            <!-- Product Grid -->

                            <div class="keranjang mt-2">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Hapus</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($keranjangs as $keranjang)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$keranjang->barang->nama_barang}}</td>
                                                <td>@currency($keranjang->barang->harga)</td>
                                                <td>{{$keranjang->jumlah}}</td>
                                                <td>@currency($keranjang->jumlah * $keranjang->barang->harga)</td>
                                                <td> 
                                                    <a href="{{url('keranjang/hapus/'.$keranjang->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></a>
                                                    </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="text-center" >Tidak Ada Barang</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <a href="{{url('keranjang/bayar')}}" class="btn btn-sm btn-success float-right">Bayar</a>

                            </div>

                            <!-- Product Sorting -->

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')

@endsection