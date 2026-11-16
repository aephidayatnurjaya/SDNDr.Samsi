{{-- ==========================================
    ABOUT / PROFIL SINGKAT SEKOLAH
    Ditampilkan di halaman beranda
=========================================== --}}

{{-- Section: Tentang Sekolah --}}
<div class="about1-area" style="padding: 70px 0; background: #FFFFFF; position: relative; overflow: hidden;">
    {{-- Dekorasi merah putih pojok --}}
    <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:linear-gradient(135deg, #FFE5E5, #FFF5F5); border-radius:0 0 0 100%; z-index:0;"></div>
    <div style="position:absolute; bottom:0; left:0; width:150px; height:150px; background:#FFF5F5; border-radius:0 100% 0 0; z-index:0;"></div>

    <div class="container" style="position:relative; z-index:1;">
        <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">

            {{-- Teks profil --}}
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                {{-- Badge label --}}
                <div style="display:inline-flex; align-items:center; gap:8px; background:#FFF5F5; border:1px solid #FFD0D0; border-radius:25px; padding:5px 16px; margin-bottom:16px;">
                    <span style="display:inline-block; width:8px; height:8px; background:#CC0000; border-radius:50%;"></span>
                    <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:1px; text-transform:uppercase;">Tentang Kami</span>
                </div>

                <h1 class="about-title">SDN Dr. Samsi</h1>
                <p class="about-sub-title">
                    Sekolah Dasar Negeri Dr. Samsi merupakan lembaga pendidikan dasar yang berkomitmen mencetak generasi unggul, berakhlak mulia, cerdas, serta memiliki semangat nasionalisme yang tinggi melalui penerapan Kurikulum Merdeka Belajar.
                </p>

                {{-- Quick stats --}}
                <div class="row" style="margin-top:30px;">
                    <div class="col-xs-4" style="text-align:center; padding:0 10px;">
                        <div style="background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:12px; padding:16px 8px; color:#FFFFFF;">
                            <div style="font-size:28px; font-weight:800; color:#FFD700;">25+</div>
                            <div style="font-size:11px; opacity:0.85; line-height:1.3;">Tahun Pengalaman</div>
                        </div>
                    </div>
                    <div class="col-xs-4" style="text-align:center; padding:0 10px;">
                        <div style="background:#FFF5F5; border:2px solid #FFE5E5; border-radius:12px; padding:16px 8px; color:#CC0000;">
                            <div style="font-size:28px; font-weight:800; color:#CC0000;">500+</div>
                            <div style="font-size:11px; color:#888; line-height:1.3;">Siswa Aktif</div>
                        </div>
                    </div>
                    <div class="col-xs-4" style="text-align:center; padding:0 10px;">
                        <div style="background:#FFF5F5; border:2px solid #FFE5E5; border-radius:12px; padding:16px 8px; color:#CC0000;">
                            <div style="font-size:28px; font-weight:800; color:#CC0000;">30+</div>
                            <div style="font-size:11px; color:#888; line-height:1.3;">Tenaga Pengajar</div>
                        </div>
                    </div>
                </div>

                <div style="margin-top:28px;">
                    <a href="{{ route('profile.sekolah') }}" style="display:inline-block; padding:12px 32px; background:#CC0000; color:#FFFFFF; border-radius:30px; font-weight:700; font-size:14px; border:2px solid #CC0000; transition:all 0.3s; margin-right:12px;">
                        <i class="fa fa-info-circle" style="margin-right:6px;"></i>Profil Lengkap
                    </a>
                    <a href="{{ route('visimisi.sekolah') }}" style="display:inline-block; padding:12px 32px; background:transparent; color:#CC0000; border-radius:30px; font-weight:700; font-size:14px; border:2px solid #CC0000; transition:all 0.3s;">
                        <i class="fa fa-bullseye" style="margin-right:6px;"></i>Visi &amp; Misi
                    </a>
                </div>
            </div>

            {{-- Gambar profil --}}
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="about-img-holder" style="position:relative; text-align:center;">
                    <div style="position:absolute; top:-15px; right:-15px; width:120px; height:120px; background:#FFD700; border-radius:50%; opacity:0.15; z-index:0;"></div>
                    <div style="position:absolute; bottom:-15px; left:-15px; width:80px; height:80px; background:#CC0000; border-radius:50%; opacity:0.1; z-index:0;"></div>

                    <img src="{{ asset('Assets/Frontend/img/about/1.jpg') }}"
                         alt="Profil Sekolah"
                         class="img-responsive"
                         style="max-height:380px; border-radius:16px; box-shadow:0 15px 40px rgba(204,0,0,0.15); border:5px solid #FFE5E5; position:relative; z-index:1; margin:0 auto;" />

                    {{-- Floating badge akreditasi --}}
                    <div style="position:absolute; bottom:20px; left:0; background:linear-gradient(135deg,#CC0000,#8B0000); color:#FFFFFF; border-radius:12px; padding:12px 18px; box-shadow:0 8px 20px rgba(204,0,0,0.3); z-index:2;">
                        <div style="font-size:11px; opacity:0.8; text-transform:uppercase; letter-spacing:1px;">Akreditasi</div>
                        <div style="font-size:22px; font-weight:800; color:#FFD700; line-height:1;">A</div>
                        <div style="font-size:10px; opacity:0.7;">Sangat Baik</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Divider --}}
<div style="height:4px; background:linear-gradient(to right, #CC0000, #FFD700, #FFFFFF, #FFD700, #CC0000);"></div>

{{-- Section: 3 Keunggulan / Pilar --}}
<div style="background:#FFF5F5; padding:60px 0;">
    <div class="container">
        <div style="text-align:center; margin-bottom:40px;">
            <div style="display:inline-flex; align-items:center; gap:8px; margin-bottom:12px;">
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
                <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:2px; text-transform:uppercase;">Keunggulan Kami</span>
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
            </div>
            <h2 style="font-size:30px; font-weight:800; color:#212121; margin:0;">
                Mengapa Memilih <span style="color:#CC0000;">SDN Dr. Samsi</span>?
            </h2>
        </div>

        <div class="row">
            {{-- Keunggulan 1: Akademik --}}
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div style="background:#FFFFFF; border-radius:16px; padding:36px 28px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:5px solid #CC0000; margin-bottom:24px; transition:all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(204,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)';">
                    <div style="width:72px; height:72px; background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 20px;">
                        <i class="fa fa-graduation-cap" style="font-size:30px; color:#FFFFFF;"></i>
                    </div>
                    <h3 style="font-size:19px; font-weight:700; color:#CC0000; margin-bottom:10px;">Akademik Unggul</h3>
                    <p style="color:#666; font-size:14px; line-height:1.7; margin:0;">Kurikulum terstruktur dengan pengajar berpengalaman dan berdedikasi untuk mendidik generasi bangsa yang cerdas dan berkarakter.</p>
                </div>
            </div>

            {{-- Keunggulan 2: Karakter --}}
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div style="background:#FFFFFF; border-radius:16px; padding:36px 28px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:5px solid #FFD700; margin-bottom:24px; transition:all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(255,215,0,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)';">
                    <div style="width:72px; height:72px; background:linear-gradient(135deg,#FFD700,#FFA500); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 20px;">
                        <i class="fa fa-heart" style="font-size:30px; color:#FFFFFF;"></i>
                    </div>
                    <h3 style="font-size:19px; font-weight:700; color:#8B0000; margin-bottom:10px;">Berkarakter Mulia</h3>
                    <p style="color:#666; font-size:14px; line-height:1.7; margin:0;">Membentuk karakter siswa yang berakhlak mulia, disiplin, bertanggung jawab, dan mencintai tanah air Indonesia.</p>
                </div>
            </div>

            {{-- Keunggulan 3: Fasilitas --}}
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div style="background:#FFFFFF; border-radius:16px; padding:36px 28px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:5px solid #CC0000; margin-bottom:24px; transition:all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(204,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)';">
                    <div style="width:72px; height:72px; background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 20px;">
                        <i class="fa fa-building" style="font-size:30px; color:#FFFFFF;"></i>
                    </div>
                    <h3 style="font-size:19px; font-weight:700; color:#CC0000; margin-bottom:10px;">Fasilitas Lengkap</h3>
                    <p style="color:#666; font-size:14px; line-height:1.7; margin:0;">Ruang kelas modern, perpustakaan, laboratorium, lapangan olahraga, dan fasilitas penunjang belajar lainnya yang memadai.</p>
                </div>
            </div>
        </div>
    </div>
</div>
