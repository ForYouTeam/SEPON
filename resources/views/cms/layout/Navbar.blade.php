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
            <li class="nav-item active">
                <a href="index.html" class="nav-link"><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Master Data</label>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                            class="feather icon-box"></i></span><span class="pcoded-mtext">Master Data</span></a>
                <ul class="pcoded-submenu">
                    <li class=""><a href="{{ route('data-siswa.index') }}" class="">Data Siswa</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
