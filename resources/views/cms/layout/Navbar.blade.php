<div class="navbar-wrapper ">
    <div class="navbar-brand header-logo">
        <img src="{{ asset('cms/assets/images/logo.svg') }}" alt="" class="logo images">
        <img src="{{ asset('cms/assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    </div>
    <div class="navbar-content scroll-div">
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            <li class="nav-item active">
                <a href="index.html" class="nav-link"><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Master Data</label>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span
                        class="pcoded-mtext">Master Data</span></a>
                <ul class="pcoded-submenu">
                    <li class=""><a href="{{route ('data-siswa.index')}}" class="">Data Siswa</a></li>
                    <li class=""><a href="{{route ('guru.index')}}" class="">Data Guru</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>