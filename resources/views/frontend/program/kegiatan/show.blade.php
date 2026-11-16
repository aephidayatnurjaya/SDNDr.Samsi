@extends('layouts.Frontend.app')

@php
    $kegiatans = [
        'pramuka' => [
            'nama' => 'Ekstrakurikuler Pramuka Siaga & Penggalang',
            'desc' => 'Melatih kemandirian, kepemimpinan, kedisiplinan, serta kerja sama tim melalui kegiatan kepramukaan rutin setiap minggu di SDN Dr. Samsi.',
            'image' => asset('Assets/Frontend/img/banner/6.jpg'),
        ],
        'olahraga-dan-futsal' => [
            'nama' => 'Kegiatan Olahraga, Senam & Futsal',
            'desc' => 'Mengembangkan kebugaran jasmani, sportivitas, dan bakat olahraga siswa melalui pembinaan futsal, bulu tangkis, atletik, dan senam bersama.',
            'image' => asset('Assets/Frontend/img/banner/7.jpg'),
        ],
        'seni-tari-dan-musik' => [
            'nama' => 'Ekstrakurikuler Seni Tari & Musik Daerah',
            'desc' => 'Melestarikan budaya bangsa dan mengasah kreativitas seni siswa melalui pelatihan tari tradisional, paduan suara, dan ansambel musik sekolah.',
            'image' => asset('Assets/Frontend/img/about/2.jpg'),
        ],
        'dokter-kecil-uks' => [
            'nama' => 'Dokter Kecil & Usaha Kesehatan Sekolah (UKS)',
            'desc' => 'Membekali siswa dengan pengetahuan pola hidup bersih dan sehat (PHBS) serta keterampilan pertolongan pertama di lingkungan sekolah.',
            'image' => asset('Assets/Frontend/img/about/1.jpg'),
        ],
    ];
    $slugKey = $slug ?? 'pramuka';
    $keg = $kegiatans[$slugKey] ?? reset($kegiatans);
@endphp

@section('title')
    {{ $keg['nama'] }} - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0;">
        <div class="container">
            <h1 style="font-size:32px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-calendar" style="margin-right:10px; color:#FFD700;"></i>{{ $keg['nama'] }}
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Kegiatan Sekolah</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 style="font-size:26px; font-weight:800; color:#CC0000; margin-bottom:16px;">{{ $keg['nama'] }}</h2>
                    <p style="color:#555; font-size:15px; line-height:1.9;">{{ $keg['desc'] }}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{ $keg['image'] }}" class="img-responsive" alt="{{ $keg['nama'] }}" style="border-radius:16px; border:4px solid #FFE5E5; box-shadow:0 12px 30px rgba(204,0,0,0.12);">
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
