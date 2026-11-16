@extends('layouts.Frontend.app')
@section('title')
    Events - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    @php
        $daftarEvent = [
            [
                'title' => 'Upacara & Peringatan Hari Guru Nasional',
                'slug' => 'upacara-hari-guru-nasional',
                'desc' => 'Kegiatan upacara bendera dan apresiasi karya siswa untuk memperingati Hari Guru Nasional di lingkungan SDN Dr. Samsi.',
                'tgl' => '25',
                'bln' => 'NOV',
                'thn' => '2026',
                'waktu' => '07:30',
                'lokasi' => 'Lapangan Utama SDN Dr. Samsi',
            ],
            [
                'title' => 'Pentas Seni & Pameran Karya Projek Penguatan Profil Pelajar Pancasila (P5)',
                'slug' => 'pentas-seni-dan-pameran-p5',
                'desc' => 'Menampilkan kreativitas seni tari, musik tradisional, dan hasil karya siswa kelas I hingga VI.',
                'tgl' => '12',
                'bln' => 'DES',
                'thn' => '2026',
                'waktu' => '08:00',
                'lokasi' => 'Aula SDN Dr. Samsi',
            ],
            [
                'title' => 'Pembagian Rapor Semester Ganjil & Pertemuan Orang Tua Wali Murid',
                'slug' => 'pembagian-rapor-semester-ganjil',
                'desc' => 'Penyerahan hasil evaluasi belajar siswa semester ganjil bersama wali kelas masing-masing.',
                'tgl' => '19',
                'bln' => 'DES',
                'thn' => '2026',
                'waktu' => '08:30',
                'lokasi' => 'Ruang Kelas SDN Dr. Samsi',
            ],
        ];
    @endphp

    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:34px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-calendar" style="margin-right:10px; color:#FFD700;"></i>Events Sekolah
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Events</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            <div class="row">
                {{-- Daftar Event --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach ($daftarEvent as $events)
                        <div style="display:flex; gap:20px; background:#FFFFFF; border-radius:14px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.07); margin-bottom:24px; border:1px solid #FFE5E5; padding:24px; transition:all 0.3s;"
                             onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 30px rgba(204,0,0,0.12)'; this.style.borderColor='#CC0000';"
                             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)'; this.style.borderColor='#FFE5E5';">

                            {{-- Kalender --}}
                            <div style="flex-shrink:0; text-align:center;">
                                <div style="width:70px; background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:14px; padding:12px 8px; color:#FFFFFF; box-shadow:0 4px 15px rgba(204,0,0,0.3);">
                                    <div style="font-size:28px; font-weight:800; color:#FFD700; line-height:1;">{{ $events['tgl'] }}</div>
                                    <div style="font-size:11px; opacity:0.85; text-transform:uppercase; margin:3px 0;">{{ $events['bln'] }}</div>
                                    <div style="font-size:10px; color:#FFD700;">{{ $events['thn'] }}</div>
                                </div>
                            </div>

                            {{-- Detail --}}
                            <div style="flex:1;">
                                <h3 style="font-size:19px; font-weight:700; margin-bottom:8px;">
                                    <a href="{{ route('detail.event', $events['slug']) }}"
                                       style="color:#212121; transition:color 0.2s;"
                                       onmouseover="this.style.color='#CC0000';"
                                       onmouseout="this.style.color='#212121';">
                                        {{ $events['title'] }}
                                    </a>
                                </h3>
                                <p style="color:#666; font-size:14px; line-height:1.7; margin-bottom:14px;">{{ $events['desc'] }}</p>

                                <div style="display:flex; gap:16px; flex-wrap:wrap; margin-bottom:16px;">
                                    <span style="display:flex; align-items:center; gap:6px; font-size:13px; color:#CC0000; font-weight:600;">
                                        <i class="fa fa-clock-o"></i>
                                        {{ $events['waktu'] }} WIB
                                    </span>
                                    <span style="display:flex; align-items:center; gap:6px; font-size:13px; color:#666;">
                                        <i class="fa fa-map-marker" style="color:#CC0000;"></i>
                                        {{ $events['lokasi'] }}
                                    </span>
                                </div>

                                <a href="{{ route('detail.event', $events['slug']) }}"
                                   style="display:inline-flex; align-items:center; gap:6px; padding:8px 20px; background:#CC0000; color:#FFFFFF; border-radius:20px; font-size:13px; font-weight:600; transition:all 0.3s;"
                                   onmouseover="this.style.background='#8B0000';"
                                   onmouseout="this.style.background='#CC0000';">
                                    Detail Event <i class="fa fa-arrow-right" style="font-size:11px;"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
