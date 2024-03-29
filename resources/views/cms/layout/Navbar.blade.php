<div class="navbar-wrapper ">
    <div class="navbar-brand header-logo">
        <span style="color: white; line-height: 19px; font-size: 14pt;">SD Muhammadiyah <br> 3 Palu Profile Web</span>
        <img src="{{ asset('cms/assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    </div>
    <div class="navbar-content scroll-div">
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            @role('super-admin')
                <li class="nav-item active">
                    <a href="{{ route('dashboard.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Master Data</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon">
                            <i class="feather icon-box"></i></span><span class="pcoded-mtext">Master Data</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('data-siswa.index') }}" class="">Data Siswa</a></li>
                        <li class=""><a href="{{ route('guru.index') }}" class="">Data Guru</a></li>
                        <li class=""><a href="{{ route('walimurid.index') }}" class="">Data Wali Murid</a></li>
                        <li class=""><a href="{{ route('pendaftar.index') }}" class="">Data Pendaftar</a></li>
                        <li class=""><a href="{{ route('fasilitas.index') }}" class="">Fasilitas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galeri.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-camera"></i></span><span class="pcoded-mtext">Galeri</span></a>
                </li>
            @endrole
            @role('user')
                <li class="nav-item">
                    <a href="{{ route('pendaftaran_siswa.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Data Siswa</span></a>
                </li>
            @endrole
        </ul>
    </div>
</div>
