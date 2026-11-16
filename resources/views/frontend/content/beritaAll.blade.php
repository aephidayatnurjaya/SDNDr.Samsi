@extends('layouts.Frontend.app')

@section('title')
    Berita - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    @php
        $daftarBerita = [
            [
                'title' => 'Penerimaan Peserta Didik Baru (PPDB) SDN Dr. Samsi Tahun Ajaran Baru',
                'slug' => 'penerimaan-peserta-didik-baru',
                'kategori' => 'Pengumuman',
                'penulis' => 'Admin Sekolah',
                'tgl' => '10',
                'bln_thn' => 'NOV 2026',
                'tanggal_lengkap' => '10 Nov 2026',
                'thumbnail' => asset('Assets/Frontend/img/banner/2.jpg'),
            ],
            [
                'title' => 'Siswa SDN Dr. Samsi Raih Juara 1 Olimpiade Sains & Matematika Tingkat Kota',
                'slug' => 'juara-olimpiade-sains-dan-matematika',
                'kategori' => 'Prestasi',
                'penulis' => 'Humas SDN Dr. Samsi',
                'tgl' => '05',
                'bln_thn' => 'NOV 2026',
                'tanggal_lengkap' => '05 Nov 2026',
                'thumbnail' => asset('Assets/Frontend/img/banner/6.jpg'),
            ],
            [
                'title' => 'Kegiatan Jumat Bersih dan Penanaman Pohon di Lingkungan Sekolah',
                'slug' => 'kegiatan-jumat-bersih-dan-penanaman-pohon',
                'kategori' => 'Kegiatan Sekolah',
                'penulis' => 'Tim UKS & Adiwiyata',
                'tgl' => '28',
                'bln_thn' => 'OKT 2026',
                'tanggal_lengkap' => '28 Okt 2026',
                'thumbnail' => asset('Assets/Frontend/img/banner/7.jpg'),
            ],
            [
                'title' => 'Pelaksanaan Workshop Kurikulum Merdeka bagi Guru SDN Dr. Samsi',
                'slug' => 'workshop-kurikulum-merdeka-guru',
                'kategori' => 'Akademik',
                'penulis' => 'Kurikulum',
                'tgl' => '18',
                'bln_thn' => 'OKT 2026',
                'tanggal_lengkap' => '18 Okt 2026',
                'thumbnail' => asset('Assets/Frontend/img/about/1.jpg'),
            ],
        ];
        $daftarKategori = ['Pengumuman', 'Prestasi', 'Kegiatan Sekolah', 'Akademik'];
    @endphp

    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:34px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-newspaper-o" style="margin-right:10px; color:#FFD700;"></i>Berita Sekolah
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Berita</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row">
                {{-- Daftar Berita --}}
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        @foreach ($daftarBerita as $beritas)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div style="background:#FFFFFF; border-radius:12px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.07); margin-bottom:28px; border:1px solid #FFE5E5; transition:all 0.3s;"
                                     onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 35px rgba(204,0,0,0.15)'; this.style.borderColor='#CC0000';"
                                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)'; this.style.borderColor='#FFE5E5';">

                                    {{-- Thumbnail --}}
                                    <div style="position:relative; overflow:hidden;">
                                        <a href="{{ route('detail.berita', $beritas['slug']) }}">
                                            <img src="{{ $beritas['thumbnail'] }}"
                                                 alt="{{ $beritas['title'] }}"
                                                 style="width:100%; height:200px; object-fit:cover; display:block; transition:transform 0.3s;"
                                                 onmouseover="this.style.transform='scale(1.05)';"
                                                 onmouseout="this.style.transform='scale(1)';">
                                        </a>
                                        {{-- Tanggal badge --}}
                                        <div style="position:absolute; top:12px; left:12px; background:#CC0000; color:#FFFFFF; border-radius:8px; padding:6px 10px; text-align:center; font-weight:700; font-size:12px; line-height:1.2; box-shadow:0 3px 10px rgba(204,0,0,0.3);">
                                            <div style="font-size:18px; line-height:1;">{{ $beritas['tgl'] }}</div>
                                            <div style="font-size:10px; opacity:0.9; text-transform:uppercase;">{{ $beritas['bln_thn'] }}</div>
                                        </div>

                                        {{-- Kategori badge --}}
                                        <div style="position:absolute; top:12px; right:12px; background:#FFD700; color:#CC0000; border-radius:15px; padding:4px 12px; font-size:11px; font-weight:700;">
                                            {{ $beritas['kategori'] }}
                                        </div>
                                    </div>

                                    {{-- Konten --}}
                                    <div style="padding:20px;">
                                        <h3 style="font-size:16px; font-weight:700; margin-bottom:10px; line-height:1.4;">
                                            <a href="{{ route('detail.berita', $beritas['slug']) }}"
                                               style="color:#212121; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden; transition:color 0.2s;"
                                               onmouseover="this.style.color='#CC0000';"
                                               onmouseout="this.style.color='#212121';">
                                                {{ $beritas['title'] }}
                                            </a>
                                        </h3>

                                        <div style="display:flex; align-items:center; gap:14px; margin-bottom:14px; padding-bottom:12px; border-bottom:1px solid #FFE5E5; flex-wrap:wrap;">
                                            <span style="display:flex; align-items:center; gap:5px; font-size:12px; color:#888;">
                                                <i class="fa fa-user" style="color:#CC0000;"></i>
                                                {{ $beritas['penulis'] }}
                                            </span>
                                        </div>

                                        <a href="{{ route('detail.berita', $beritas['slug']) }}"
                                           style="display:inline-flex; align-items:center; gap:6px; padding:8px 20px; background:#CC0000; color:#FFFFFF; border-radius:20px; font-size:13px; font-weight:600; transition:all 0.3s;"
                                           onmouseover="this.style.background='#8B0000';"
                                           onmouseout="this.style.background='#CC0000';">
                                            Baca Selengkapnya <i class="fa fa-arrow-right" style="font-size:11px;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                    {{-- Kategori --}}
                    <div style="background:#FFF5F5; border-radius:12px; padding:24px; margin-bottom:24px; border-top:4px solid #CC0000;">
                        <h4 style="font-size:17px; font-weight:700; color:#CC0000; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-tags" style="margin-right:7px;"></i>Kategori
                        </h4>
                        <ul style="list-style:none; padding:0; margin:0;">
                            @foreach ($daftarKategori as $kat)
                                <li style="border-bottom:1px solid #FFE5E5;">
                                    <a href="{{ route('berita') }}"
                                       style="display:flex; align-items:center; justify-content:space-between; padding:9px 0; color:#444; font-size:14px; transition:all 0.2s;"
                                       onmouseover="this.style.color='#CC0000'; this.style.paddingLeft='8px';"
                                       onmouseout="this.style.color='#444'; this.style.paddingLeft='0';">
                                        <span><i class="fa fa-angle-right" style="color:#CC0000; margin-right:7px;"></i>{{ $kat }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Berita Terbaru Sidebar --}}
                    <div style="background:#FFF5F5; border-radius:12px; padding:24px; border-top:4px solid #CC0000;">
                        <h4 style="font-size:17px; font-weight:700; color:#CC0000; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-clock-o" style="margin-right:7px;"></i>Berita Terbaru
                        </h4>
                        @foreach ($daftarBerita as $beritas)
                            <div style="display:flex; gap:12px; padding:10px 0; border-bottom:1px solid #FFE5E5;">
                                <a href="{{ route('detail.berita', $beritas['slug']) }}" style="flex-shrink:0;">
                                    <img src="{{ $beritas['thumbnail'] }}"
                                         alt=""
                                         style="width:60px; height:50px; object-fit:cover; border-radius:8px; border:2px solid #FFE5E5;">
                                </a>
                                <div>
                                    <a href="{{ route('detail.berita', $beritas['slug']) }}"
                                       style="font-size:12px; font-weight:600; color:#333; line-height:1.4; display:block; margin-bottom:4px; transition:color 0.2s;"
                                       onmouseover="this.style.color='#CC0000';"
                                       onmouseout="this.style.color='#333';">
                                        {{ Str::limit($beritas['title'], 50) }}
                                    </a>
                                    <span style="font-size:11px; color:#CC0000; font-weight:600;">
                                        {{ $beritas['tanggal_lengkap'] }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
