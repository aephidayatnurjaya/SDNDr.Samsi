@extends('layouts.Frontend.app')

@section('title')
    Dashboard Murid - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    @php
        $profilMurid = [
            'nama' => 'Ahmad Rizky Pratama',
            'nisn' => '0124891021',
            'kelas' => 'Kelas VI-A',
            'wali_kelas' => 'Siti Aminah, S.Pd.',
            'semester' => 'Ganjil 2026/2027',
        ];

        $jadwalPelajaran = [
            ['hari' => 'Senin', 'mapel' => 'Upacara Bendera, Matematika, Bahasa Indonesia, Pendidikan Pancasila'],
            ['hari' => 'Selasa', 'mapel' => 'IPAS (Sains & Sosial), Bahasa Inggris, Seni Budaya & Prakarya'],
            ['hari' => 'Rabu', 'mapel' => 'Matematika, Pendidikan Agama & Budi Pekerti, Bahasa Indonesia'],
            ['hari' => 'Kamis', 'mapel' => 'PJOK (Olahraga), IPAS, Muatan Lokal Bahasa Daerah'],
            ['hari' => 'Jumat', 'mapel' => 'Senam Pagi / Jumat Bersih, Projek P5, Ekstrakurikuler Pramuka'],
        ];

        $nilaiMapel = [
            ['mapel' => 'Pendidikan Agama dan Budi Pekerti', 'kkm' => 75, 'tugas' => 90, 'uts' => 92, 'akhir' => 91, 'predikat' => 'A'],
            ['mapel' => 'Pendidikan Pancasila', 'kkm' => 75, 'tugas' => 88, 'uts' => 89, 'akhir' => 89, 'predikat' => 'A'],
            ['mapel' => 'Bahasa Indonesia', 'kkm' => 75, 'tugas' => 92, 'uts' => 90, 'akhir' => 91, 'predikat' => 'A'],
            ['mapel' => 'Matematika', 'kkm' => 75, 'tugas' => 86, 'uts' => 88, 'akhir' => 87, 'predikat' => 'B+'],
            ['mapel' => 'Ilmu Pengetahuan Alam dan Sosial (IPAS)', 'kkm' => 75, 'tugas' => 89, 'uts' => 91, 'akhir' => 90, 'predikat' => 'A'],
            ['mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'kkm' => 75, 'tugas' => 94, 'uts' => 92, 'akhir' => 93, 'predikat' => 'A'],
        ];

        $pinjamanBuku = [
            ['judul' => 'Ensiklopedia Sains Anak Nusantara', 'tgl_pinjam' => '10 Nov 2026', 'batas_kembali' => '24 Nov 2026', 'status' => 'Dipinjam'],
            ['judul' => 'Kumpulan Cerita Rakyat Nusantara', 'tgl_pinjam' => '01 Nov 2026', 'batas_kembali' => '15 Nov 2026', 'status' => 'Dikembalikan'],
        ];
    @endphp

    {{-- Header Banner Dashboard Murid --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:45px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-40px; right:-40px; width:220px; height:220px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">
                <div class="col-md-8 col-sm-12">
                    <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.15); border-radius:20px; padding:4px 14px; margin-bottom:10px;">
                        <i class="fa fa-graduation-cap" style="color:#FFD700;"></i>
                        <span style="color:#FFFFFF; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px;">Portal Siswa SDN Dr. Samsi</span>
                    </div>
                    <h1 style="font-size:30px; font-weight:800; color:#FFFFFF; margin:0 0 6px;">
                        Halo, {{ $profilMurid['nama'] }}!
                    </h1>
                    <p style="color:rgba(255,255,255,0.85); font-size:14px; margin:0;">
                        NISN: {{ $profilMurid['nisn'] }} &nbsp;|&nbsp; {{ $profilMurid['kelas'] }} &nbsp;|&nbsp; Wali Kelas: {{ $profilMurid['wali_kelas'] }}
                    </p>
                </div>
                <div class="col-md-4 col-sm-12" style="text-align:right; margin-top:15px;">
                    <a href="{{ route('dashboard.guru') }}" style="display:inline-block; padding:9px 18px; background:#FFD700; color:#CC0000; border-radius:20px; font-weight:700; font-size:13px; margin-right:8px;">
                        <i class="fa fa-exchange" style="margin-right:4px;"></i>Lihat Dashboard Guru
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" style="padding:9px 18px; background:rgba(255,255,255,0.15); color:#FFFFFF; border:1px solid rgba(255,255,255,0.4); border-radius:20px; font-weight:600; font-size:13px; cursor:pointer;">
                            <i class="fa fa-sign-out" style="margin-right:4px;"></i>Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten Utama Dashboard Murid --}}
    <div style="padding:50px 0; background:#FFF5F5;">
        <div class="container">

            {{-- Kartu Statistik Ringkas Siswa --}}
            <div class="row" style="margin-bottom:30px;">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Persentase Kehadiran</div>
                        <div style="font-size:28px; font-weight:800; color:#CC0000; margin:4px 0;">98%</div>
                        <div style="font-size:12px; color:#2e7d32;"><i class="fa fa-check-circle"></i> Sangat Disiplin</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Rata-Rata Nilai Rapor</div>
                        <div style="font-size:28px; font-weight:800; color:#8B0000; margin:4px 0;">90,1</div>
                        <div style="font-size:12px; color:#666;"><i class="fa fa-star" style="color:#FFD700;"></i> Predikat A</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Ekstrakurikuler</div>
                        <div style="font-size:22px; font-weight:800; color:#CC0000; margin:8px 0 4px;">Pramuka &amp; Futsal</div>
                        <div style="font-size:12px; color:#2e7d32;"><i class="fa fa-trophy"></i> Aktif</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Pinjaman Perpustakaan</div>
                        <div style="font-size:28px; font-weight:800; color:#8B0000; margin:4px 0;">1 Buku</div>
                        <div style="font-size:12px; color:#666;"><i class="fa fa-book"></i> Kembali 24 Nov</div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Kolom Kiri: Daftar Nilai & Perpustakaan --}}
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    {{-- Tabel Hasil Belajar / Nilai Siswa --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #CC0000; margin-bottom:28px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px; padding-bottom:12px; border-bottom:2px solid #FFE5E5; flex-wrap:wrap;">
                            <h3 style="font-size:19px; font-weight:800; color:#CC0000; margin:0;">
                                <i class="fa fa-bar-chart" style="margin-right:8px;"></i>Rekap Nilai Mata Pelajaran
                            </h3>
                            <span style="font-size:12px; background:#FFF5F5; color:#CC0000; padding:5px 12px; border-radius:15px; font-weight:700;">Semester {{ $profilMurid['semester'] }}</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" style="margin-bottom:0;">
                                <thead style="background:#CC0000; color:#FFFFFF;">
                                    <tr>
                                        <th>Mata Pelajaran</th>
                                        <th>KKM</th>
                                        <th>Tugas</th>
                                        <th>UTS</th>
                                        <th>Nilai Akhir</th>
                                        <th>Predikat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilaiMapel as $nilai)
                                        <tr>
                                            <td style="font-weight:700; color:#212121;">{{ $nilai['mapel'] }}</td>
                                            <td>{{ $nilai['kkm'] }}</td>
                                            <td>{{ $nilai['tugas'] }}</td>
                                            <td>{{ $nilai['uts'] }}</td>
                                            <td style="font-weight:800; color:#CC0000;">{{ $nilai['akhir'] }}</td>
                                            <td><span style="background:#FFF5F5; color:#CC0000; border:1px solid #FFD0D0; padding:3px 10px; border-radius:12px; font-size:12px; font-weight:700;">{{ $nilai['predikat'] }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Tabel Riwayat Peminjaman Buku Perpustakaan --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #FFD700; margin-bottom:28px;">
                        <h3 style="font-size:19px; font-weight:800; color:#8B0000; margin:0 0 18px; padding-bottom:12px; border-bottom:2px solid #FFE5E5;">
                            <i class="fa fa-book" style="margin-right:8px; color:#CC0000;"></i>Status Peminjaman Buku Perpustakaan
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-hover" style="margin-bottom:0;">
                                <thead style="background:#FFF5F5; color:#CC0000;">
                                    <tr>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Batas Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pinjamanBuku as $buku)
                                        <tr>
                                            <td style="font-weight:700;">{{ $buku['judul'] }}</td>
                                            <td>{{ $buku['tgl_pinjam'] }}</td>
                                            <td>{{ $buku['batas_kembali'] }}</td>
                                            <td>
                                                @if ($buku['status'] === 'Dipinjam')
                                                    <span style="background:#fff8e1; color:#f57f17; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:700;">Sedang Dipinjam</span>
                                                @else
                                                    <span style="background:#e8f5e9; color:#2e7d32; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:700;">Sudah Dikembalikan</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                {{-- Kolom Kanan: Profil Siswa & Jadwal Mingguan --}}
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    {{-- Card Profil Siswa --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #CC0000; margin-bottom:28px;">
                        <div style="width:96px; height:96px; border-radius:50%; overflow:hidden; border:4px solid #FFE5E5; margin:0 auto 14px;">
                            <img src="{{ asset('Assets/Frontend/img/user.png') }}" alt="Foto Siswa" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <h4 style="font-size:18px; font-weight:800; color:#CC0000; margin:0 0 4px;">{{ $profilMurid['nama'] }}</h4>
                        <p style="font-size:13px; color:#666; margin:0 0 14px;">{{ $profilMurid['kelas'] }} - SDN Dr. Samsi</p>
                        <div style="background:#FFF5F5; border-radius:12px; padding:14px; text-align:left; font-size:13px; color:#444;">
                            <div style="margin-bottom:8px;"><strong>NISN:</strong> {{ $profilMurid['nisn'] }}</div>
                            <div style="margin-bottom:8px;"><strong>Wali Kelas:</strong> {{ $profilMurid['wali_kelas'] }}</div>
                            <div><strong>Status SPP:</strong> <span style="color:#2e7d32; font-weight:700;">Bebas Biaya (SD Negeri)</span></div>
                        </div>
                    </div>

                    {{-- Jadwal Pelajaran Mingguan --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #FFD700;">
                        <h4 style="font-size:17px; font-weight:800; color:#CC0000; margin:0 0 16px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-calendar" style="margin-right:7px; color:#FFD700;"></i>Jadwal Pelajaran Mingguan
                        </h4>
                        <ul style="list-style:none; padding:0; margin:0;">
                            @foreach ($jadwalPelajaran as $j)
                                <li style="padding:10px 0; border-bottom:1px dashed #FFE5E5;">
                                    <div style="font-size:13px; color:#CC0000; font-weight:800;">{{ $j['hari'] }}</div>
                                    <div style="font-size:13px; color:#555; line-height:1.5;">{{ $j['mapel'] }}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endsection
@endsection