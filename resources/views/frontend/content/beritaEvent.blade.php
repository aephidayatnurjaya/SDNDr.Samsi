{{-- ===== BERITA & EVENT SECTION ===== --}}
@php
    $daftarBerita = [
        [
            'title' => 'Penerimaan Peserta Didik Baru (PPDB) SDN Dr. Samsi Tahun Ajaran Baru',
            'slug' => 'penerimaan-peserta-didik-baru',
            'thumbnail' => asset('Assets/Frontend/img/banner/2.jpg'),
            'tanggal' => '10 November 2026',
        ],
        [
            'title' => 'Siswa SDN Dr. Samsi Raih Juara 1 Olimpiade Sains & Matematika Tingkat Kota',
            'slug' => 'juara-olimpiade-sains-dan-matematika',
            'thumbnail' => asset('Assets/Frontend/img/banner/6.jpg'),
            'tanggal' => '05 November 2026',
        ],
        [
            'title' => 'Kegiatan Jumat Bersih dan Penanaman Pohon di Lingkungan Sekolah',
            'slug' => 'kegiatan-jumat-bersih-dan-penanaman-pohon',
            'thumbnail' => asset('Assets/Frontend/img/banner/7.jpg'),
            'tanggal' => '28 Oktober 2026',
        ],
    ];

    $daftarEvent = [
        [
            'title' => 'Upacara & Peringatan Hari Guru Nasional',
            'slug' => 'upacara-hari-guru-nasional',
            'desc' => 'Kegiatan upacara bendera dan apresiasi karya siswa untuk memperingati Hari Guru Nasional.',
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

<div style="background:#FFFFFF; padding:70px 0;">
    <div class="container">

        {{-- Judul section --}}
        <div style="text-align:center; margin-bottom:50px;">
            <div style="display:inline-flex; align-items:center; gap:8px; margin-bottom:12px;">
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
                <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:2px; text-transform:uppercase;">Update Terkini</span>
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
            </div>
            <h2 style="font-size:30px; font-weight:800; color:#212121;">
                Berita &amp; <span style="color:#CC0000;">Events</span>
            </h2>
        </div>

        <div class="row">
            {{-- ===== BERITA ===== --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-inner-area">

                {{-- Header tab berita --}}
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:24px; padding-bottom:14px; border-bottom:3px solid #CC0000;">
                    <h2 style="font-size:22px; font-weight:800; color:#CC0000; margin:0;">
                        <i class="fa fa-newspaper-o" style="margin-right:8px;"></i>Berita Terbaru
                    </h2>
                    <a href="{{ route('berita') }}"
                       style="font-size:12px; color:#CC0000; font-weight:600; border:1px solid #CC0000; padding:4px 14px; border-radius:15px; transition:all 0.2s;"
                       onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                       onmouseout="this.style.background='transparent'; this.style.color='#CC0000';">
                        Lihat Semua <i class="fa fa-arrow-right"></i>
                    </a>
                </div>

                <ul style="list-style:none; padding:0; margin:0;">
                    @foreach ($daftarBerita as $beritas)
                        <li style="display:flex; gap:16px; padding:14px 0; border-bottom:1px solid #FFE5E5; transition:all 0.2s;"
                            onmouseover="this.style.background='#FFF5F5'; this.style.marginLeft='-8px'; this.style.paddingLeft='8px'; this.style.borderRadius='8px';"
                            onmouseout="this.style.background='transparent'; this.style.marginLeft='0'; this.style.paddingLeft='0'; this.style.borderRadius='0';">
                            {{-- Thumbnail --}}
                            <div style="flex-shrink:0;">
                                <a href="{{ route('detail.berita', $beritas['slug']) }}">
                                    <img src="{{ $beritas['thumbnail'] }}"
                                         alt="{{ $beritas['title'] }}"
                                         style="width:88px; height:68px; object-fit:cover; border-radius:10px; border:2px solid #FFE5E5;">
                                </a>
                            </div>
                            {{-- Konten --}}
                            <div style="flex:1; min-width:0;">
                                <h3 style="font-size:14px; font-weight:600; margin-bottom:5px; line-height:1.4;">
                                    <a href="{{ route('detail.berita', $beritas['slug']) }}"
                                       style="color:#212121; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;"
                                       onmouseover="this.style.color='#CC0000';"
                                       onmouseout="this.style.color='#212121';">
                                        {{ $beritas['title'] }}
                                    </a>
                                </h3>
                                <div style="display:flex; align-items:center; gap:8px;">
                                    <span style="display:inline-block; width:6px; height:6px; background:#CC0000; border-radius:50%;"></span>
                                    <span style="font-size:12px; color:#CC0000; font-weight:600;">
                                        {{ $beritas['tanggal'] }}
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div style="margin-top:24px;">
                    <a href="{{ route('berita') }}"
                       style="display:inline-block; padding:10px 28px; background:#CC0000; color:#FFFFFF; border-radius:25px; font-size:14px; font-weight:700; border:2px solid #CC0000; transition:all 0.3s;"
                       onmouseover="this.style.background='transparent'; this.style.color='#CC0000';"
                       onmouseout="this.style.background='#CC0000'; this.style.color='#FFFFFF';">
                        <i class="fa fa-list" style="margin-right:6px;"></i>Semua Berita
                    </a>
                </div>
            </div>

            {{-- ===== EVENTS ===== --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 event-inner-area" style="margin-top:0;">

                {{-- Header tab event --}}
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:24px; padding-bottom:14px; border-bottom:3px solid #FFD700;">
                    <h2 style="font-size:22px; font-weight:800; color:#CC0000; margin:0;">
                        <i class="fa fa-calendar" style="margin-right:8px;"></i>Events Terbaru
                    </h2>
                    <a href="{{ route('event') }}"
                       style="font-size:12px; color:#CC0000; font-weight:600; border:1px solid #CC0000; padding:4px 14px; border-radius:15px; transition:all 0.2s;"
                       onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                       onmouseout="this.style.background='transparent'; this.style.color='#CC0000';">
                        Lihat Semua <i class="fa fa-arrow-right"></i>
                    </a>
                </div>

                <ul style="list-style:none; padding:0; margin:0;">
                    @foreach ($daftarEvent as $events)
                        <li style="display:flex; gap:16px; padding:14px 0; border-bottom:1px solid #FFE5E5;" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            {{-- Kalender --}}
                            <div style="flex-shrink:0;">
                                <div style="width:60px; background:linear-gradient(135deg,#CC0000,#8B0000); border-radius:12px; text-align:center; padding:10px 5px; color:#FFFFFF; box-shadow:0 4px 12px rgba(204,0,0,0.3);">
                                    <div style="font-size:24px; font-weight:800; color:#FFD700; line-height:1;">
                                        {{ $events['tgl'] }}
                                    </div>
                                    <div style="font-size:11px; opacity:0.85; text-transform:uppercase; letter-spacing:0.5px;">
                                        {{ $events['bln'] }}
                                    </div>
                                    <div style="font-size:10px; color:#FFD700; margin-top:2px;">
                                        {{ $events['thn'] }}
                                    </div>
                                </div>
                            </div>

                            {{-- Konten event --}}
                            <div style="flex:1; min-width:0;">
                                <h3 style="font-size:14px; font-weight:700; margin-bottom:5px; line-height:1.4;">
                                    <a href="{{ route('detail.event', $events['slug']) }}"
                                       style="color:#212121;"
                                       onmouseover="this.style.color='#CC0000';"
                                       onmouseout="this.style.color='#212121';">
                                        {{ $events['title'] }}
                                    </a>
                                </h3>
                                <p style="font-size:13px; color:#666; margin-bottom:6px; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
                                    {{ $events['desc'] }}
                                </p>
                                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                                    <span style="font-size:11px; color:#CC0000; font-weight:600;">
                                        <i class="fa fa-clock-o" style="margin-right:4px;"></i>
                                        {{ $events['waktu'] }} WIB
                                    </span>
                                    <span style="font-size:11px; color:#888; font-weight:500;">
                                        <i class="fa fa-map-marker" style="margin-right:4px; color:#CC0000;"></i>
                                        {{ $events['lokasi'] }}
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div style="margin-top:24px;">
                    <a href="{{ route('event') }}"
                       style="display:inline-block; padding:10px 28px; background:transparent; color:#CC0000; border-radius:25px; font-size:14px; font-weight:700; border:2px solid #CC0000; transition:all 0.3s;"
                       onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                       onmouseout="this.style.background='transparent'; this.style.color='#CC0000';">
                        <i class="fa fa-calendar-check-o" style="margin-right:6px;"></i>Semua Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== CTA SECTION: PPDB ===== --}}
<div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:60px 0; position:relative; overflow:hidden;">
    <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
    <div style="position:absolute; bottom:-30px; left:30px; width:150px; height:150px; background:rgba(255,215,0,0.08); border-radius:50%;"></div>

    <div class="container" style="position:relative; z-index:1; text-align:center;">
        <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); border-radius:25px; padding:5px 16px; margin-bottom:16px;">
            <i class="fa fa-bullhorn" style="color:#FFD700; font-size:14px;"></i>
            <span style="font-size:12px; font-weight:700; color:rgba(255,255,255,0.9); letter-spacing:1px; text-transform:uppercase;">Penerimaan Siswa Baru</span>
        </div>

        <h2 style="font-size:34px; font-weight:800; color:#FFFFFF; margin-bottom:12px;">
            Daftarkan Putra/Putri Anda <br>di <span style="color:#FFD700;">SDN Dr. Samsi</span>
        </h2>
        <p style="font-size:16px; color:rgba(255,255,255,0.85); margin-bottom:32px; max-width:550px; margin-left:auto; margin-right:auto;">
            Penerimaan Peserta Didik Baru (PPDB) telah dibuka. Jangan lewatkan kesempatan emas untuk memberikan pendidikan terbaik bagi buah hati Anda.
        </p>

        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
            <a href="{{ url('ppdb') }}"
               style="display:inline-flex; align-items:center; gap:10px; padding:14px 36px; background:#FFD700; color:#CC0000; border-radius:30px; font-size:16px; font-weight:800; transition:all 0.3s; box-shadow:0 6px 20px rgba(0,0,0,0.2); border:2px solid #FFD700;"
               onmouseover="this.style.background='transparent'; this.style.color='#FFD700'; this.style.transform='translateY(-3px)';"
               onmouseout="this.style.background='#FFD700'; this.style.color='#CC0000'; this.style.transform='translateY(0)';">
                <i class="fa fa-pencil-square-o"></i>
                Daftar PPDB Sekarang
            </a>
            <a href="{{ route('profile.sekolah') }}"
               style="display:inline-flex; align-items:center; gap:10px; padding:14px 36px; background:transparent; color:#FFFFFF; border-radius:30px; font-size:16px; font-weight:700; transition:all 0.3s; border:2px solid rgba(255,255,255,0.5);"
               onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='#FFFFFF';"
               onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(255,255,255,0.5)';">
                <i class="fa fa-info-circle"></i>
                Info Sekolah
            </a>
        </div>
    </div>
</div>
