@extends('layouts.Frontend.app')

@section('title')
    Dashboard Guru - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    @php
        $profilGuru = [
            'nama' => 'Aep Hidayat Nurjaya S.Pd.M.Kom.',
            'nip' => '19860412 201001 2 008',
            'jabatan' => 'Wali Kelas VI-A & Guru Tematik',
            'status' => 'Aktif',
        ];

        $jadwalMengajar = [
            ['jam' => '07:00 - 08:30', 'kelas' => 'Kelas VI-A', 'mapel' => 'Matematika (Bangun Ruang)', 'ruang' => 'R. Kelas 6A', 'status' => 'Selesai'],
            ['jam' => '08:30 - 10:00', 'kelas' => 'Kelas VI-A', 'mapel' => 'Bahasa Indonesia & Literasi', 'ruang' => 'R. Kelas 6A', 'status' => 'Berlangsung'],
            ['jam' => '10:30 - 12:00', 'kelas' => 'Kelas V-B', 'mapel' => 'Ilmu Pengetahuan Alam dan Sosial (IPAS)', 'ruang' => 'R. Kelas 5B', 'status' => 'Terjadwal'],
            ['jam' => '12:30 - 13:45', 'kelas' => 'Kelas VI-A', 'mapel' => 'Projek Penguatan Profil Pelajar Pancasila (P5)', 'ruang' => 'Aula Sekolah', 'status' => 'Terjadwal'],
        ];

        $daftarSiswa = [
            ['nisn' => '0124891021', 'nama' => 'Ahmad Rizky Pratama', 'jk' => 'L', 'hadir' => '98%', 'tugas' => 88, 'uts' => 90, 'predikat' => 'A (Sangat Baik)'],
            ['nisn' => '0124891022', 'nama' => 'Aisyah Putri Maharani', 'jk' => 'P', 'hadir' => '100%', 'tugas' => 92, 'uts' => 94, 'predikat' => 'A (Sangat Baik)'],
            ['nisn' => '0124891023', 'nama' => 'Bagas Adi Nugroho', 'jk' => 'L', 'hadir' => '95%', 'tugas' => 84, 'uts' => 82, 'predikat' => 'B (Baik)'],
            ['nisn' => '0124891024', 'nama' => 'Citra Lestari Dewi', 'jk' => 'P', 'hadir' => '97%', 'tugas' => 89, 'uts' => 87, 'predikat' => 'A (Sangat Baik)'],
            ['nisn' => '0124891025', 'nama' => 'Dimas Fajar Ramadhan', 'jk' => 'L', 'hadir' => '94%', 'tugas' => 80, 'uts' => 85, 'predikat' => 'B (Baik)'],
        ];
    @endphp

    {{-- Header Banner Dashboard Guru --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:45px 0; position:relative; overflow:hidden;">
        <div style="position:absolute; top:-40px; right:-40px; width:220px; height:220px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
        <div class="container" style="position:relative; z-index:1;">
            <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">
                <div class="col-md-8 col-sm-12">
                    <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.15); border-radius:20px; padding:4px 14px; margin-bottom:10px;">
                        <i class="fa fa-id-badge" style="color:#FFD700;"></i>
                        <span style="color:#FFFFFF; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px;">Portal Tenaga Pendidik</span>
                    </div>
                    <h1 style="font-size:30px; font-weight:800; color:#FFFFFF; margin:0 0 6px;">
                        Selamat Datang, {{ $profilGuru['nama'] }}
                    </h1>
                    <p style="color:rgba(255,255,255,0.85); font-size:14px; margin:0;">
                        NIP: {{ $profilGuru['nip'] }} &nbsp;|&nbsp; {{ $profilGuru['jabatan'] }}
                    </p>
                </div>
                <div class="col-md-4 col-sm-12" style="text-align:right; margin-top:15px;">
                    <a href="{{ route('dashboard.murid') }}" style="display:inline-block; padding:9px 18px; background:#FFD700; color:#CC0000; border-radius:20px; font-weight:700; font-size:13px; margin-right:8px;">
                        <i class="fa fa-exchange" style="margin-right:4px;"></i>Lihat Dashboard Murid
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

    {{-- Konten Utama Dashboard Guru --}}
    <div style="padding:50px 0; background:#FFF5F5;">
        <div class="container">

            {{-- Kartu Statistik Ringkas --}}
            <div class="row" style="margin-bottom:30px;">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Siswa Kelas VI-A</div>
                        <div style="font-size:28px; font-weight:800; color:#CC0000; margin:4px 0;">32 Siswa</div>
                        <div style="font-size:12px; color:#2e7d32;"><i class="fa fa-check-circle"></i> 31 Hadir Hari Ini</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Jam Mengajar Minggu Ini</div>
                        <div style="font-size:28px; font-weight:800; color:#8B0000; margin:4px 0;">24 JP</div>
                        <div style="font-size:12px; color:#666;"><i class="fa fa-calendar"></i> 4 Sesi Hari Ini</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Rata-Rata Nilai Kelas</div>
                        <div style="font-size:28px; font-weight:800; color:#CC0000; margin:4px 0;">87,4</div>
                        <div style="font-size:12px; color:#2e7d32;"><i class="fa fa-line-chart"></i> Semester Ganjil</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:22px; border-left:5px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <div style="font-size:12px; color:#888; text-transform:uppercase; font-weight:700;">Tugas Perlu Dinilai</div>
                        <div style="font-size:28px; font-weight:800; color:#8B0000; margin:4px 0;">5 Tugas</div>
                        <div style="font-size:12px; color:#CC0000;"><i class="fa fa-clock-o"></i> Batas Pekan Ini</div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Kolom Kiri: Jadwal Mengajar & Rekap Nilai Siswa --}}
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    {{-- Tabel Jadwal Mengajar Hari Ini --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #CC0000; margin-bottom:28px;">
                        <h3 style="font-size:19px; font-weight:800; color:#CC0000; margin:0 0 18px; padding-bottom:12px; border-bottom:2px solid #FFE5E5;">
                            <i class="fa fa-calendar-check-o" style="margin-right:8px;"></i>Jadwal Mengajar Hari Ini
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-hover" style="margin-bottom:0;">
                                <thead style="background:#FFF5F5; color:#CC0000;">
                                    <tr>
                                        <th>Waktu (WIB)</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran / Materi</th>
                                        <th>Ruangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwalMengajar as $jadwal)
                                        <tr>
                                            <td style="font-weight:700; color:#333;">{{ $jadwal['jam'] }}</td>
                                            <td><span style="background:#FFF5F5; color:#CC0000; padding:3px 10px; border-radius:12px; font-weight:700; font-size:12px;">{{ $jadwal['kelas'] }}</span></td>
                                            <td>{{ $jadwal['mapel'] }}</td>
                                            <td>{{ $jadwal['ruang'] }}</td>
                                            <td>
                                                @if ($jadwal['status'] === 'Selesai')
                                                    <span style="background:#e8f5e9; color:#2e7d32; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:700;">Selesai</span>
                                                @elseif ($jadwal['status'] === 'Berlangsung')
                                                    <span style="background:#CC0000; color:#FFFFFF; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:700;">Berlangsung</span>
                                                @else
                                                    <span style="background:#fff8e1; color:#f57f17; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:700;">Terjadwal</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Tabel Daftar Siswa & Rekap Nilai Kelas VI-A --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #FFD700; margin-bottom:28px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px; padding-bottom:12px; border-bottom:2px solid #FFE5E5; flex-wrap:wrap;">
                            <h3 style="font-size:19px; font-weight:800; color:#8B0000; margin:0;">
                                <i class="fa fa-users" style="margin-right:8px; color:#CC0000;"></i>Rekap Kehadiran &amp; Nilai Siswa (Kelas VI-A)
                            </h3>
                            <span style="font-size:12px; background:#FFF5F5; color:#CC0000; padding:5px 12px; border-radius:15px; font-weight:700;">Semester Ganjil 2026/2027</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" style="margin-bottom:0;">
                                <thead style="background:#CC0000; color:#FFFFFF;">
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>L/P</th>
                                        <th>Kehadiran</th>
                                        <th>Rata Tugas</th>
                                        <th>Nilai UTS</th>
                                        <th>Predikat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftarSiswa as $siswa)
                                        <tr>
                                            <td style="font-weight:600;">{{ $siswa['nisn'] }}</td>
                                            <td style="font-weight:700; color:#212121;">{{ $siswa['nama'] }}</td>
                                            <td>{{ $siswa['jk'] }}</td>
                                            <td><span style="color:#2e7d32; font-weight:700;">{{ $siswa['hadir'] }}</span></td>
                                            <td>{{ $siswa['tugas'] }}</td>
                                            <td style="font-weight:700; color:#CC0000;">{{ $siswa['uts'] }}</td>
                                            <td><span style="background:#FFF5F5; color:#CC0000; border:1px solid #FFD0D0; padding:3px 10px; border-radius:12px; font-size:11px; font-weight:700;">{{ $siswa['predikat'] }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                {{-- Kolom Kanan: Profil Guru & Agenda Akademik --}}
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    {{-- Card Profil Singkat Guru --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #CC0000; margin-bottom:28px;">
                        <div style="width:96px; height:96px; border-radius:50%; overflow:hidden; border:4px solid #FFE5E5; margin:0 auto 14px;">
                            <img src="{{ asset('Assets/Frontend/img/user.png') }}" alt="Foto Guru" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <h4 style="font-size:18px; font-weight:800; color:#CC0000; margin:0 0 4px;">{{ $profilGuru['nama'] }}</h4>
                        <p style="font-size:13px; color:#666; margin:0 0 14px;">{{ $profilGuru['jabatan'] }}</p>
                        <div style="background:#FFF5F5; border-radius:12px; padding:14px; text-align:left; font-size:13px; color:#444;">
                            <div style="margin-bottom:8px;"><strong>NIP:</strong> {{ $profilGuru['nip'] }}</div>
                            <div style="margin-bottom:8px;"><strong>Kurikulum:</strong> Merdeka Belajar</div>
                            <div><strong>Status:</strong> <span style="color:#2e7d32; font-weight:700;">{{ $profilGuru['status'] }}</span></div>
                        </div>
                    </div>

                    {{-- Pengumuman Internal Guru --}}
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-top:4px solid #FFD700;">
                        <h4 style="font-size:17px; font-weight:800; color:#CC0000; margin:0 0 16px; padding-bottom:10px; border-bottom:1px solid #FFE5E5;">
                            <i class="fa fa-bell" style="margin-right:7px; color:#FFD700;"></i>Agenda &amp; Pengumuman Guru
                        </h4>
                        <ul style="list-style:none; padding:0; margin:0;">
                            <li style="padding:10px 0; border-bottom:1px dashed #FFE5E5;">
                                <div style="font-size:12px; color:#CC0000; font-weight:700;">20 November 2026</div>
                                <div style="font-size:14px; font-weight:600; color:#333;">Rapat Koordinasi Persiapan PAS Ganjil</div>
                            </li>
                            <li style="padding:10px 0; border-bottom:1px dashed #FFE5E5;">
                                <div style="font-size:12px; color:#CC0000; font-weight:700;">25 November 2026</div>
                                <div style="font-size:14px; font-weight:600; color:#333;">Upacara Peringatan Hari Guru Nasional</div>
                            </li>
                            <li style="padding:10px 0;">
                                <div style="font-size:12px; color:#CC0000; font-weight:700;">15 Desember 2026</div>
                                <div style="font-size:14px; font-weight:600; color:#333;">Batas Akhir Input Nilai Rapor Kelas I–VI</div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endsection
@endsection