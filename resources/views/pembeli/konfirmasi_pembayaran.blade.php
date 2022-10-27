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

    form .form-control {
        color: black;
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
                    <li><a href="">Home</a></li>
                    <li class="active"><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>Konfirmasi
                            Pembayaran</a></li>
                </ul>
            </div>


            <!-- Main Content -->

            <div class="">

                <div class="card mx-auto">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-7">
                                <h5>Detail Informasi</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td> : {{auth()->user()->name}}</td>
                                        </tr>

                                        <tr>
                                            <td>No Hp</td>
                                            <td> : {{auth()->user()->no_hp}}</td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td> : {{auth()->user()->no_hp}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                            <div class="col-md-12 mt-2">
                                <h5>Pesanan</h5>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($total = 0)
                                        @foreach($keranjangs as $keranjang)
                                        @php($total = $total + $keranjang->jumlah * $keranjang->barang->harga)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$keranjang->barang->nama_barang}}</td>
                                            <td>@currency($keranjang->barang->harga)</td>
                                            <td>{{$keranjang->jumlah}}</td>
                                            <td>@currency($keranjang->jumlah * $keranjang->barang->harga)</td>
                                        </tr>
                                        <tr class="bg-primary text-white">
                                            <td colspan="4"> Total Pembayaran </td>
                                            <td>@currency($total)</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>


                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection

@section('js')

<script src="{{asset('public/js/axios.min.js')}}"></script>

<script>

</script>

@endsection