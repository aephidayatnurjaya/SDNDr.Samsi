@extends('layouts.Frontend.app')

@section('title')
    Visi dan Misi - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    @php
        $visiText = 'Terwujudnya Peserta Didik SDN Dr. Samsi yang Beriman, Berakhlak Mulia, Cerdas, Terampil, Mandiri, dan Berwawasan Lingkungan Berdasarkan Profil Pelajar Pancasila.';
        $misiList = [
            'Menanamkan keimanan dan ketakwaan melalui pengamalan ajaran agama serta pembiasaan perilaku berakhlak mulia di lingkungan sekolah.',
            'Menyelenggarakan pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan berbasis Kurikulum Merdeka.',
            'Mengembangkan potensi akademik, literasi, numerasi, serta minat dan bakat siswa melalui kegiatan ekstrakurikuler yang beragam.',
            'Membina kemandirian, kedisiplinan, dan rasa cinta tanah air dalam kehidupan sehari-hari.',
            'Mewujudkan lingkungan sekolah yang bersih, sehat, asri, dan ramah anak.',
        ];
    @endphp

    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-50px; right:-50px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:34px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-bullseye" style="margin-right:10px; color:#FFD700;"></i>Visi &amp; Misi
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Visi &amp; Misi</span>
            </div>
        </div>
    </div>

    <div style="background:#FFF5F5; padding:70px 0;">
        <div class="container">
            {{-- Header section --}}
            <div style="text-align:center; margin-bottom:50px;">
                <div style="display:inline-flex; align-items:center; gap:8px; margin-bottom:12px;">
                    <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
                    <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:2px; text-transform:uppercase;">Arah & Tujuan</span>
                    <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
                </div>
                <h2 style="font-size:30px; font-weight:800; color:#212121;">Visi &amp; Misi <span style="color:#CC0000;">SDN Dr. Samsi</span></h2>
            </div>

            <div class="row" style="display:flex; align-items:flex-start; flex-wrap:wrap;">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                    {{-- Visi Card --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:36px; box-shadow:0 8px 30px rgba(0,0,0,0.08); border-left:6px solid #CC0000; margin-bottom:28px; position:relative; overflow:hidden;">
                        <div style="position:absolute; top:-20px; right:-20px; width:100px; height:100px; background:#FFF5F5; border-radius:50%;"></div>
                        <div style="position:relative; z-index:1;">
                            <div style="display:flex; align-items:center; gap:14px; margin-bottom:18px;">
                                <div style="width:52px; height:52px; background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                    <i class="fa fa-eye" style="font-size:22px; color:#FFFFFF;"></i>
                                </div>
                                <h2 style="font-size:26px; font-weight:800; color:#CC0000; margin:0;">VISI</h2>
                            </div>
                            <p style="color:#444; font-size:15px; line-height:1.9; margin:0; font-style:italic; border-left:3px solid #FFD700; padding-left:16px;">
                                "{{ $visiText }}"
                            </p>
                        </div>
                    </div>

                    {{-- Misi Card --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:36px; box-shadow:0 8px 30px rgba(0,0,0,0.08); border-left:6px solid #FFD700; margin-bottom:28px; position:relative; overflow:hidden;">
                        <div style="position:absolute; bottom:-20px; right:-20px; width:100px; height:100px; background:#FFF5F5; border-radius:50%;"></div>
                        <div style="position:relative; z-index:1;">
                            <div style="display:flex; align-items:center; gap:14px; margin-bottom:18px;">
                                <div style="width:52px; height:52px; background:linear-gradient(135deg,#FFD700,#FFA500); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                    <i class="fa fa-tasks" style="font-size:22px; color:#FFFFFF;"></i>
                                </div>
                                <h2 style="font-size:26px; font-weight:800; color:#8B0000; margin:0;">MISI</h2>
                            </div>
                            <div style="color:#444; font-size:15px; line-height:1.9;">
                                <ul style="list-style:none; padding:0; margin:0;">
                                    @foreach($misiList as $i => $line)
                                        <li style="display:flex; align-items:flex-start; gap:12px; padding:8px 0; border-bottom:1px solid #FFE5E5;">
                                            <span style="display:inline-flex; align-items:center; justify-content:center; min-width:26px; height:26px; background:#CC0000; color:#FFFFFF; border-radius:50%; font-size:12px; font-weight:700; flex-shrink:0; margin-top:2px;">{{ $i + 1 }}</span>
                                            <span>{{ $line }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Gambar --}}
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div style="position:sticky; top:120px;">
                        <img src="{{ asset('Assets/Frontend/img/about/2.jpg') }}"
                             class="img-responsive"
                             alt="Visi Misi SDN Dr. Samsi"
                             style="border-radius:16px; box-shadow:0 15px 40px rgba(204,0,0,0.12); border:5px solid #FFE5E5; width:100%;">

                        {{-- Nilai-nilai sekolah --}}
                        <div style="background:#FFFFFF; border-radius:16px; padding:24px; margin-top:24px; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:4px solid #CC0000;">
                            <h4 style="font-size:16px; font-weight:700; color:#CC0000; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                                <i class="fa fa-star" style="margin-right:7px; color:#FFD700;"></i>Nilai-Nilai Sekolah
                            </h4>
                            <div style="display:flex; flex-wrap:wrap; gap:8px;">
                                @foreach(['Integritas', 'Disiplin', 'Kreatif', 'Inovatif', 'Tanggung Jawab', 'Nasionalisme'] as $nilai)
                                <span style="background:#FFF5F5; color:#CC0000; border:1px solid #FFD0D0; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:600;">
                                    {{ $nilai }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    {{-- Guru Section --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection
