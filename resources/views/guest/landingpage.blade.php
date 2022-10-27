@extends('shop.master')
@section('content')

<!-- Slider -->

<div class="main_slider" style="background-image:url({{asset('public/image/banner/banner_bangunan.png')}})">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_content">
                    <h6>Toko Bangunan Murah Jaya</h6>
                    <h1>Get up to 30% Off New Arrivals</h1>
                    <div class="red_button shop_now_button"><a href="#">shop now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- New Arrivals -->

<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col text-center">
                <div class="new_arrivals_sorting">
                    <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                            data-filter="*">all</li>
                        @foreach($kategori_barangs as $kategori)
                        @if(!$kategori->barang->isEmpty())
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                            data-filter=".kategori-{{$kategori->id}}">{{$kategori->kategori}}</li>
                        @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                    <!-- Product 1 -->

                    @foreach($barangs as $barang)

                    <div class="product-item kategori-{{$barang->kategori_barang_id}}">
                        <div class="product discount product_filter">
                            <div class="product_image">
                                <img style="height:180px;" src="{{asset('public/image/foto_barang/'.$barang->foto_barang)}}" alt="">
                            </div>
                            <div class="favorite favorite_left"></div>
                            <div
                                class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                <span style="font-size:8px;" >{{$barang->status}}</span></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">
                                    {{$barang->nama_barang}}
                                    </a></h6>
                                <div class="product_price">@currency($barang->harga)</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="{{url('barang/'.$barang->id)}}">Beli</a></div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>



<!-- Benefit -->

<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>free shipping</h6>
                        <p>Suffered Alteration in Some Form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>cach on delivery</h6>
                        <p>The Internet Tend To Repeat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>45 days return</h6>
                        <p>Making it Look Like Readable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>opening all week</h6>
                        <p>8AM - 09PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection