<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item {{request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- <li class="nav-item {{request()->is('/kategori-barang/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('kategori-barang')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Kategori barang</span>
            </a>
        </li>
        <li class="nav-item {{request()->is('barang/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('barang')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Barang</span>
            </a>
        </li> -->

        <li class="nav-item {{request()->is('kategori-barang*') || request()->is('barang-bangunan*') || request()->is('stok-barang*')  ? 'active' : '' }} ">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Barang</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('kategori-barang')}}">Kategori Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('barang-bangunan')}}">Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('stok-barang')}}">Stok Barang</a></li>
                </ul>
              </div>
            </li>

        <li class="nav-item {{request()->is('pesanan/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('pesanan')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Pesanan</span>
            </a>
        </li>

        <li class="nav-item {{request()->is('/akun-bank/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('akun-bank')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Akun Bank</span>
            </a>
        </li>


</nav>