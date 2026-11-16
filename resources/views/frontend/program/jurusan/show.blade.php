@extends('layouts.Frontend.app')

@php
    $programs = [
        'kurikulum-merdeka' => [
            'nama' => 'Kurikulum Merdeka Belajar',
            'desc' => 'Pembelajaran intrakurikuler yang beragam dan berpusat pada peserta didik disertai Projek Penguatan Profil Pelajar Pancasila (P5) untuk mengembangkan karakter dan kompetensi dasar siswa SDN Dr. Samsi.',
            'image' => asset('Assets/Frontend/img/about/1.jpg'),
        ],
        'literasi-dan-numerasi' => [
            'nama' => 'Program Penguatan Literasi & Numerasi',
            'desc' => 'Program pembiasaan membaca 15 menit sebelum pelajaran, pojok baca di setiap kelas, serta pembelajaran matematika kontekstual yang menyenangkan dan aplikatif.',
            'image' => asset('Assets/Frontend/img/about/2.jpg'),
        ],
        'pendidikan-karakter' => [
            'nama' => 'Pendidikan Karakter & Budaya Sekolah',
            'desc' => 'Pembiasaan 5S (Senyum, Sapa, Salam, Sopan, Santun), upacara bendera, kegiatan keagamaan, dan kepedulian lingkungan bagi seluruh siswa SDN Dr. Samsi.',
            'image' => asset('Assets/Frontend/img/banner/2.jpg'),
        ],
    ];
    $slugKey = $slug ?? 'kurikulum-merdeka';
    $prog = $programs[$slugKey] ?? reset($programs);
@endphp

@section('title')
    {{ $prog['nama'] }} - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0;">
        <div class="container">
            <h1 style="font-size:32px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-book" style="margin-right:10px; color:#FFD700;"></i>{{ $prog['nama'] }}
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Program Unggulan</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 style="font-size:26px; font-weight:800; color:#CC0000; margin-bottom:16px;">{{ $prog['nama'] }}</h2>
                    <p style="color:#555; font-size:15px; line-height:1.9;">{{ $prog['desc'] }}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{ $prog['image'] }}" class="img-responsive" alt="{{ $prog['nama'] }}" style="border-radius:16px; border:4px solid #FFE5E5; box-shadow:0 12px 30px rgba(204,0,0,0.12);">
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
