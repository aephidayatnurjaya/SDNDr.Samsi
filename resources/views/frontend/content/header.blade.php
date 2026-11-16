@php
    $programList = [
        ['nama' => 'Kurikulum Merdeka', 'slug' => 'kurikulum-merdeka'],
        ['nama' => 'Literasi & Numerasi', 'slug' => 'literasi-dan-numerasi'],
        ['nama' => 'Pendidikan Karakter', 'slug' => 'pendidikan-karakter'],
    ];
    $kegiatanList = [
        ['nama' => 'Pramuka', 'slug' => 'pramuka'],
        ['nama' => 'Olahraga & Futsal', 'slug' => 'olahraga-dan-futsal'],
        ['nama' => 'Seni Tari & Musik', 'slug' => 'seni-tari-dan-musik'],
        ['nama' => 'Dokter Kecil (UKS)', 'slug' => 'dokter-kecil-uks'],
    ];
@endphp

<div id="header2" class="header4-area">
    <!-- Top Bar: Logo + Contact + Login -->
    <div class="header-top-area">
        <div class="container">
            <div class="row" style="display:flex; align-items:center;">
                <!-- Logo -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="header-top-left" style="padding: 8px 0;">
                        <div class="logo-area">
                            <a href="{{ url('/') }}">
                                <img class="img-responsive" src="{{ asset('Assets/Frontend/img/logo-footer.png') }}" alt="SDN Dr. Samsi" style="max-height:65px;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- School Name (center, visible on larger screens) -->
                <div class="col-lg-6 col-md-5 hidden-sm hidden-xs" style="text-align:center;">
                    <div style="color:#FFFFFF; line-height:1.3;">
                        <div style="font-size:11px; letter-spacing:2px; opacity:0.8; text-transform:uppercase; font-weight:500;">Pemerintah Kota / Kabupaten</div>
                        <div style="font-size:20px; font-weight:800; letter-spacing:1px;">SDN DR. SAMSI</div>
                        <div style="font-size:11px; opacity:0.75;">Sekolah Dasar Negeri Dr. Samsi</div>
                    </div>
                </div>

                <!-- Right: Contact + Login button -->
                <div class="col-lg-3 col-md-4 col-sm-8 col-xs-12">
                    <div class="header-top-right">
                        <ul style="justify-content:flex-end; list-style:none; margin:0; padding:0; display:flex; align-items:center; gap:14px;">
                            <li style="display:flex; align-items:center; gap:6px;">
                                <i class="fa fa-phone" style="color:#FFD700;"></i>
                                <a href="tel:0215550123" style="color:rgba(255,255,255,0.9); font-size:13px;">(021) 555-0123</a>
                            </li>
                            <li>
                                <a class="apply-now-btn2" href="{{ route('login') }}">
                                    <i class="fa fa-sign-in" style="margin-right:4px;"></i> Masuk
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="main-menu-area bg-primary" id="sticker">
        <div class="container">
            <div class="row" style="display:flex; align-items:center;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}"><i class="fa fa-home" style="margin-right:5px;"></i>Beranda</a>
                            </li>
                            <li class="{{ request()->is('profile-sekolah') || request()->is('visi-dan-misi') ? 'active' : '' }}">
                                <a href="#">Tentang Kami <i class="fa fa-caret-down" style="font-size:11px;"></i></a>
                                <ul>
                                    <li><a href="{{ route('profile.sekolah') }}"><i class="fa fa-university" style="margin-right:6px;"></i>Profile Sekolah</a></li>
                                    <li><a href="{{ route('visimisi.sekolah') }}"><i class="fa fa-bullseye" style="margin-right:6px;"></i>Visi dan Misi</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('program*') || request()->is('kegiatan*') ? 'active' : '' }}">
                                <a href="#">Program <i class="fa fa-caret-down" style="font-size:11px;"></i></a>
                                <ul>
                                    <li class="has-child-menu">
                                        <a href="#"><i class="fa fa-book" style="margin-right:6px;"></i>Program Unggulan <i class="fa fa-caret-right" style="font-size:10px; float:right; margin-top:4px;"></i></a>
                                        <ul class="thired-level">
                                            @foreach ($programList as $prog)
                                                <li><a href="{{ url('program/' . $prog['slug']) }}">{{ $prog['nama'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-child-menu">
                                        <a href="#"><i class="fa fa-calendar" style="margin-right:6px;"></i>Kegiatan <i class="fa fa-caret-right" style="font-size:10px; float:right; margin-top:4px;"></i></a>
                                        <ul class="thired-level">
                                            @foreach ($kegiatanList as $keg)
                                                <li><a href="{{ url('kegiatan/' . $keg['slug']) }}">{{ $keg['nama'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('berita*') ? 'active' : '' }}">
                                <a href="{{ route('berita') }}"><i class="fa fa-newspaper-o" style="margin-right:5px;"></i>Berita</a>
                            </li>
                            <li class="{{ request()->is('event*') ? 'active' : '' }}">
                                <a href="{{ route('event') }}"><i class="fa fa-calendar" style="margin-right:5px;"></i>Events</a>
                            </li>
                            <li>
                                <a href="{{ url('ppdb') }}"
                                   style="background:#CC0000 !important; color:#FFFFFF !important; padding: 10px 20px !important; border-radius:25px !important; margin: 5px 0 !important; font-weight:700 !important; border: 2px solid #CC0000 !important; transition: all 0.3s !important;">
                                    <i class="fa fa-pencil-square-o" style="margin-right:5px;"></i>PPDB
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area" style="background:#CC0000;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li><a href="{{ route('profile.sekolah') }}">Profile Sekolah</a></li>
                                    <li><a href="{{ route('visimisi.sekolah') }}">Visi dan Misi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Program</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">Program Unggulan</a>
                                        <ul class="thired-level">
                                            @foreach ($programList as $prog)
                                                <li><a href="{{ url('program/' . $prog['slug']) }}">{{ $prog['nama'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-child-menu"><a href="#">Kegiatan</a>
                                        <ul class="thired-level">
                                            @foreach ($kegiatanList as $keg)
                                                <li><a href="{{ url('kegiatan/' . $keg['slug']) }}">{{ $keg['nama'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('berita*') ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a></li>
                            <li class="{{ request()->is('event*') ? 'active' : '' }}"><a href="{{ route('event') }}">Events</a></li>
                            <li><a href="{{ url('ppdb') }}">PPDB</a></li>
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End -->

<style>
#desktop-nav > ul > li {
    position: relative;
}
#desktop-nav > ul > li:hover > ul {
    display: block;
}
#desktop-nav ul ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
#desktop-nav .has-child-menu:hover > .thired-level {
    display: block;
}
#header2.header4-area {
    transition: box-shadow 0.3s;
}
#desktop-nav > ul > li > a[href*="ppdb"]:hover {
    background: #8B0000 !important;
    border-color: #8B0000 !important;
    color: #FFFFFF !important;
}
#desktop-nav > ul > li > a[href*="ppdb"]::after {
    display: none;
}
</style>
