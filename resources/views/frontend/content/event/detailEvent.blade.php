@extends('layouts.Frontend.app')

@php
    $semuaEvent = [
        'upacara-hari-guru-nasional' => [
            'title' => 'Upacara & Peringatan Hari Guru Nasional',
            'tanggal' => '25 November 2026',
            'waktu' => '07:30 WIB',
            'lokasi' => 'Lapangan Utama SDN Dr. Samsi',
            'thumbnail' => asset('Assets/Frontend/img/banner/3.jpg'),
            'content' => 'Kegiatan upacara bendera bersama seluruh pendidik, tenaga kependidikan, dan siswa-siswi SDN Dr. Samsi dalam rangka memperingati Hari Guru Nasional, dilanjutkan dengan penampilan persembahan siswa dan pemberian apresiasi kepada guru.',
        ],
        'pentas-seni-dan-pameran-p5' => [
            'title' => 'Pentas Seni & Pameran Karya Projek Penguatan Profil Pelajar Pancasila (P5)',
            'tanggal' => '12 Desember 2026',
            'waktu' => '08:00 WIB',
            'lokasi' => 'Aula SDN Dr. Samsi',
            'thumbnail' => asset('Assets/Frontend/img/banner/4.jpg'),
            'content' => 'Pameran hasil karya siswa dan pentas seni budaya Nusantara sebagai puncak kegiatan Projek Penguatan Profil Pelajar Pancasila (P5) semester ganjil di SDN Dr. Samsi.',
        ],
        'pembagian-rapor-semester-ganjil' => [
            'title' => 'Pembagian Rapor Semester Ganjil & Pertemuan Orang Tua Wali Murid',
            'tanggal' => '19 Desember 2026',
            'waktu' => '08:30 WIB',
            'lokasi' => 'Ruang Kelas SDN Dr. Samsi',
            'thumbnail' => asset('Assets/Frontend/img/banner/2.jpg'),
            'content' => 'Agenda penerimaan Laporan Hasil Belajar (Rapor) peserta didik semester ganjil sekaligus konsultasi perkembangan akademik dan karakter siswa bersama wali kelas.',
        ],
    ];
    $slugKey = $slug ?? 'upacara-hari-guru-nasional';
    $event = $semuaEvent[$slugKey] ?? reset($semuaEvent);
@endphp

@section('title')
    {{ $event['title'] }} - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:28px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">{{ $event['title'] }}</h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <a href="{{ route('event') }}" style="color:rgba(255,255,255,0.75);">Events</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Detail Event</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div style="margin-bottom:24px; border-radius:16px; overflow:hidden; border:4px solid #FFE5E5;">
                        <img src="{{ $event['thumbnail'] }}" alt="{{ $event['title'] }}" style="width:100%; max-height:400px; object-fit:cover; display:block;">
                    </div>
                    <h2 style="font-size:26px; font-weight:800; color:#CC0000; margin-bottom:14px;">{{ $event['title'] }}</h2>
                    <p style="color:#444; font-size:15px; line-height:1.9;">{{ $event['content'] }}</p>
                    <div style="margin-top:24px;">
                        <a href="{{ route('event') }}" style="display:inline-flex; align-items:center; gap:7px; padding:10px 24px; background:#CC0000; color:#FFFFFF; border-radius:25px; font-weight:600;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Events
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div style="background:#FFF5F5; border-radius:16px; padding:28px; border-top:5px solid #CC0000;">
                        <h4 style="font-size:18px; font-weight:700; color:#CC0000; margin-bottom:16px;">Jadwal & Lokasi</h4>
                        <p style="margin-bottom:10px;"><i class="fa fa-calendar" style="color:#CC0000; margin-right:8px;"></i><strong>Tanggal:</strong> {{ $event['tanggal'] }}</p>
                        <p style="margin-bottom:10px;"><i class="fa fa-clock-o" style="color:#CC0000; margin-right:8px;"></i><strong>Waktu:</strong> {{ $event['waktu'] }}</p>
                        <p style="margin-bottom:0;"><i class="fa fa-map-marker" style="color:#CC0000; margin-right:8px;"></i><strong>Lokasi:</strong> {{ $event['lokasi'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
