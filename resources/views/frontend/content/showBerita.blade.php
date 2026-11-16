@extends('layouts.Frontend.app')

@php
    $semuaBerita = [
        'penerimaan-peserta-didik-baru' => [
            'title' => 'Penerimaan Peserta Didik Baru (PPDB) SDN Dr. Samsi Tahun Ajaran Baru',
            'slug' => 'penerimaan-peserta-didik-baru',
            'kategori' => 'Pengumuman',
            'penulis' => 'Admin Sekolah',
            'tgl' => '10',
            'bln_thn' => 'NOV 2026',
            'tanggal_lengkap' => '10 November 2026, 08:00',
            'thumbnail' => asset('Assets/Frontend/img/banner/2.jpg'),
            'content' => '<p><strong>SDN Dr. Samsi</strong> secara resmi membuka pendaftaran Penerimaan Peserta Didik Baru (PPDB) untuk Tahun Ajaran Baru. Kami mengundang para orang tua/wali calon peserta didik untuk mendaftarkan putra-putrinya bergabung bersama keluarga besar SDN Dr. Samsi.</p><p>Pendaftaran dapat dilakukan secara daring melalui halaman PPDB website ini maupun secara langsung di sekretariat PPDB SDN Dr. Samsi pada jam kerja (Senin–Jumat pukul 07:00 – 14:00 WIB). Persyaratan utama meliputi fotokopi Akta Kelahiran, Kartu Keluarga, dan pas foto terbaru.</p>',
        ],
        'juara-olimpiade-sains-dan-matematika' => [
            'title' => 'Siswa SDN Dr. Samsi Raih Juara 1 Olimpiade Sains & Matematika Tingkat Kota',
            'slug' => 'juara-olimpiade-sains-dan-matematika',
            'kategori' => 'Prestasi',
            'penulis' => 'Humas SDN Dr. Samsi',
            'tgl' => '05',
            'bln_thn' => 'NOV 2026',
            'tanggal_lengkap' => '05 November 2026, 10:30',
            'thumbnail' => asset('Assets/Frontend/img/banner/6.jpg'),
            'content' => '<p>Prestasi membanggakan kembali diraih oleh siswa-siswi <strong>SDN Dr. Samsi</strong> dalam ajang Olimpiade Sains dan Matematika Tingkat Kota. Tim olimpiade sekolah berhasil meraih Juara 1 setelah melewati babak penyisihan dan final dengan nilai tertinggi.</p><p>Kepala SDN Dr. Samsi menyampaikan apresiasi setinggi-tingginya kepada para siswa dan guru pembimbing atas kerja keras, disiplin, dan dedikasi yang luar biasa.</p>',
        ],
        'kegiatan-jumat-bersih-dan-penanaman-pohon' => [
            'title' => 'Kegiatan Jumat Bersih dan Penanaman Pohon di Lingkungan Sekolah',
            'slug' => 'kegiatan-jumat-bersih-dan-penanaman-pohon',
            'kategori' => 'Kegiatan Sekolah',
            'penulis' => 'Tim UKS & Adiwiyata',
            'tgl' => '28',
            'bln_thn' => 'OKT 2026',
            'tanggal_lengkap' => '28 Oktober 2026, 09:00',
            'thumbnail' => asset('Assets/Frontend/img/banner/7.jpg'),
            'content' => '<p>Dalam rangka menumbuhkan kepedulian terhadap kebersihan dan kelestarian lingkungan, seluruh warga <strong>SDN Dr. Samsi</strong> melaksanakan kegiatan Jumat Bersih dan penanaman bibit pohon pelindung di halaman sekolah.</p><p>Melalui kegiatan ini, siswa belajar bekerja sama secara gotong royong dan bertanggung jawab menjaga kerapian ruang kelas serta taman sekolah.</p>',
        ],
    ];
    $slugKey = $slug ?? 'penerimaan-peserta-didik-baru';
    $berita = $semuaBerita[$slugKey] ?? reset($semuaBerita);
    $daftarKategori = ['Pengumuman', 'Prestasi', 'Kegiatan Sekolah', 'Akademik'];
@endphp

@section('title')
    {{ $berita['title'] }} - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')

    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:28px; font-weight:800; color:#FFFFFF; margin:0 0 8px; line-height:1.3;">
                {{ Str::limit($berita['title'], 70) }}
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px; flex-wrap:wrap;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <a href="{{ route('berita') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Berita</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Detail</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row">
                {{-- Konten Utama --}}
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    {{-- Thumbnail --}}
                    <div style="margin-bottom:28px; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); border:3px solid #FFE5E5; position:relative;">
                        <img src="{{ $berita['thumbnail'] }}"
                             alt="{{ $berita['title'] }}"
                             style="width:100%; max-height:450px; object-fit:cover; display:block;">

                        {{-- Badge tanggal --}}
                        <div style="position:absolute; top:20px; left:20px; background:#CC0000; color:#FFFFFF; border-radius:10px; padding:8px 14px; text-align:center; box-shadow:0 4px 12px rgba(204,0,0,0.3);">
                            <div style="font-size:22px; font-weight:800; line-height:1;">{{ $berita['tgl'] }}</div>
                            <div style="font-size:11px; opacity:0.9; text-transform:uppercase;">{{ $berita['bln_thn'] }}</div>
                        </div>
                    </div>

                    {{-- Judul & Meta --}}
                    <h2 style="font-size:26px; font-weight:800; color:#CC0000; margin-bottom:14px; line-height:1.3;">
                        {{ $berita['title'] }}
                    </h2>

                    <div style="display:flex; align-items:center; gap:16px; padding:12px 0; margin-bottom:24px; border-top:1px solid #FFE5E5; border-bottom:1px solid #FFE5E5; flex-wrap:wrap;">
                        <span style="display:flex; align-items:center; gap:6px; font-size:13px; color:#666;">
                            <i class="fa fa-user" style="color:#CC0000;"></i>
                            <strong>{{ $berita['penulis'] }}</strong>
                        </span>
                        <span style="display:flex; align-items:center; gap:6px; font-size:13px; color:#666;">
                            <i class="fa fa-clock-o" style="color:#CC0000;"></i>
                            {{ $berita['tanggal_lengkap'] }} WIB
                        </span>
                        <span style="display:flex; align-items:center; gap:6px; font-size:13px;">
                            <i class="fa fa-tag" style="color:#CC0000;"></i>
                            <span style="background:#FFF5F5; color:#CC0000; border:1px solid #FFD0D0; border-radius:15px; padding:2px 12px; font-size:12px; font-weight:600;">{{ $berita['kategori'] }}</span>
                        </span>
                    </div>

                    {{-- Konten berita --}}
                    <div style="color:#444; font-size:15px; line-height:1.9; margin-bottom:32px;">
                        {!! $berita['content'] !!}
                    </div>

                    {{-- Navigasi --}}
                    <div style="margin-top:12px;">
                        <a href="{{ route('berita') }}"
                           style="display:inline-flex; align-items:center; gap:7px; padding:10px 24px; background:#CC0000; color:#FFFFFF; border-radius:25px; font-size:14px; font-weight:600; transition:all 0.3s;"
                           onmouseover="this.style.background='#8B0000';"
                           onmouseout="this.style.background='#CC0000';">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div style="background:#FFF5F5; border-radius:12px; padding:24px; margin-bottom:24px; border-top:4px solid #CC0000;">
                        <h4 style="font-size:17px; font-weight:700; color:#CC0000; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-tags" style="margin-right:7px;"></i>Kategori
                        </h4>
                        <ul style="list-style:none; padding:0; margin:0;">
                            @foreach ($daftarKategori as $kat)
                                <li style="border-bottom:1px solid #FFE5E5;">
                                    <a href="{{ route('berita') }}"
                                       style="display:flex; align-items:center; gap:7px; padding:9px 0; color:#444; font-size:14px; transition:all 0.2s;"
                                       onmouseover="this.style.color='#CC0000'; this.style.paddingLeft='8px';"
                                       onmouseout="this.style.color='#444'; this.style.paddingLeft='0';">
                                        <i class="fa fa-angle-right" style="color:#CC0000;"></i>{{ $kat }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div style="background:#FFF5F5; border-radius:12px; padding:24px; border-top:4px solid #CC0000;">
                        <h4 style="font-size:17px; font-weight:700; color:#CC0000; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-clock-o" style="margin-right:7px;"></i>Berita Lainnya
                        </h4>
                        @foreach ($semuaBerita as $item)
                            <div style="display:flex; gap:12px; padding:10px 0; border-bottom:1px solid #FFE5E5;">
                                <a href="{{ route('detail.berita', $item['slug']) }}" style="flex-shrink:0;">
                                    <img src="{{ $item['thumbnail'] }}"
                                         alt=""
                                         style="width:60px; height:50px; object-fit:cover; border-radius:8px; border:2px solid #FFE5E5;">
                                </a>
                                <div>
                                    <a href="{{ route('detail.berita', $item['slug']) }}"
                                       style="font-size:12px; font-weight:600; color:#333; line-height:1.4; display:block; margin-bottom:4px; transition:color 0.2s;"
                                       onmouseover="this.style.color='#CC0000';"
                                       onmouseout="this.style.color='#333';">
                                        {{ Str::limit($item['title'], 50) }}
                                    </a>
                                    <span style="font-size:11px; color:#CC0000; font-weight:600;">
                                        {{ $item['tgl'] }} {{ $item['bln_thn'] }}
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
