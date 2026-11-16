@extends('layouts.Frontend.app')

@section('title')
    Profile Sekolah - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-50px; right:-50px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div style="position:absolute; bottom:-30px; left:30px; width:120px; height:120px; background:rgba(255,215,0,0.08); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:34px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-university" style="margin-right:10px; color:#FFD700;"></i>Profile Sekolah
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.75)';">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">Profile Sekolah</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFFFFF;">
        <div class="container">
            {{-- Gambar Sekolah --}}
            <div style="margin-bottom:40px; border-radius:16px; overflow:hidden; box-shadow:0 15px 40px rgba(204,0,0,0.12); border:4px solid #FFE5E5;">
                <img src="{{ asset('Assets/Frontend/img/banner/3.jpg') }}"
                     class="img-responsive"
                     alt="Profile Sekolah SDN Dr. Samsi"
                     style="width:100%; max-height:450px; object-fit:cover; display:block;">
            </div>

            {{-- Konten Profil --}}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div style="margin-bottom:30px;">
                        <div style="display:inline-flex; align-items:center; gap:8px; background:#FFF5F5; border:1px solid #FFD0D0; border-radius:25px; padding:5px 16px; margin-bottom:14px;">
                            <span style="display:inline-block; width:7px; height:7px; background:#CC0000; border-radius:50%;"></span>
                            <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:1px; text-transform:uppercase;">Tentang Sekolah</span>
                        </div>
                        <h2 style="font-size:28px; font-weight:800; color:#CC0000; margin-bottom:14px; padding-bottom:12px; border-bottom:3px solid #FFE5E5; position:relative;">
                            Sekolah Dasar Negeri Dr. Samsi
                            <span style="position:absolute; bottom:-3px; left:0; width:60px; height:3px; background:linear-gradient(to right,#CC0000,#FFD700);"></span>
                        </h2>
                        <div style="color:#555; font-size:15px; line-height:1.9;">
                            <p><strong>SDN Dr. Samsi</strong> adalah lembaga pendidikan dasar negeri yang berdedikasi dalam menyelenggarakan pendidikan berkualitas tinggi bagi seluruh peserta didik. Dengan memadukan keunggulan akademik, pembinaan karakter Pancasila, serta pengembangan bakat dan minat siswa, SDN Dr. Samsi terus tumbuh menjadi sekolah rujukan yang ramah anak dan berprestasi.</p>
                            <p>Melalui penerapan <strong>Kurikulum Merdeka Belajar</strong>, proses pembelajaran dirancang secara aktif, kreatif, dan menyenangkan. Siswa didorong untuk berpikir kritis, berkolaborasi, serta memiliki literasi dan numerasi yang kuat sejak usia dini.</p>
                            <p>Didukung oleh tenaga pendidik dan kependidikan yang tersertifikasi serta sarana prasarana yang memadai—mulai dari ruang kelas yang nyaman, perpustakaan, UKS, hingga sarana olahraga dan kesenian—SDN Dr. Samsi siap mengantarkan generasi penerus bangsa menuju masa depan yang gemilang.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    {{-- Card info sekolah --}}
                    <div style="background:#FFF5F5; border-radius:16px; padding:28px; border-top:5px solid #CC0000; box-shadow:0 4px 20px rgba(0,0,0,0.07);">
                        <h4 style="font-size:18px; font-weight:700; color:#CC0000; margin-bottom:18px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-info-circle" style="margin-right:7px;"></i>Informasi Sekolah
                        </h4>

                        <div style="margin-bottom:14px; padding-bottom:12px; border-bottom:1px dashed #FFE5E5;">
                            <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">NPSN</div>
                            <div style="font-size:14px; font-weight:600; color:#333;">20218491</div>
                        </div>
                        <div style="margin-bottom:14px; padding-bottom:12px; border-bottom:1px dashed #FFE5E5;">
                            <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">Status Sekolah</div>
                            <div style="font-size:14px; font-weight:600; color:#CC0000;">Negeri</div>
                        </div>
                        <div style="margin-bottom:14px; padding-bottom:12px; border-bottom:1px dashed #FFE5E5;">
                            <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">Akreditasi</div>
                            <div style="font-size:22px; font-weight:800; color:#CC0000; display:flex; align-items:center; gap:8px;">
                                A
                                <span style="font-size:12px; color:#888; font-weight:400;">(Sangat Baik)</span>
                            </div>
                        </div>
                        <div style="margin-bottom:14px; padding-bottom:12px; border-bottom:1px dashed #FFE5E5;">
                            <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">Kurikulum</div>
                            <div style="font-size:14px; font-weight:600; color:#333;">Merdeka Belajar</div>
                        </div>
                        <div>
                            <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">Jam Belajar</div>
                            <div style="font-size:14px; font-weight:600; color:#333;">07:00 – 14:00 WIB</div>
                        </div>

                        <div style="margin-top:20px;">
                            <a href="{{ url('ppdb') }}"
                               style="display:block; padding:12px; background:#CC0000; color:#FFFFFF; border-radius:10px; text-align:center; font-weight:700; font-size:14px; transition:background 0.3s;"
                               onmouseover="this.style.background='#8B0000';"
                               onmouseout="this.style.background='#CC0000';">
                                <i class="fa fa-pencil-square-o" style="margin-right:6px;"></i>Daftar PPDB
                            </a>
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
