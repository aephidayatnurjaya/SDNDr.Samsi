@extends('layouts.Frontend.app')

@section('title')
    PPDB - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    {{-- Page Banner --}}
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0; position:relative; overflow:hidden;">
        <div class="container" style="position:relative; z-index:1;">
            <h1 style="font-size:34px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-pencil-square-o" style="margin-right:10px; color:#FFD700;"></i>Penerimaan Peserta Didik Baru (PPDB)
            </h1>
            <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,0.7); font-size:14px;">
                <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.75);">Beranda</a>
                <i class="fa fa-chevron-right" style="font-size:10px;"></i>
                <span style="color:#FFD700;">PPDB SDN Dr. Samsi</span>
            </div>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFF5F5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:16px; padding:32px; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:5px solid #CC0000; margin-bottom:24px;">
                        <h3 style="font-size:22px; font-weight:800; color:#CC0000; margin-bottom:16px;">Syarat Pendaftaran Siswa Baru</h3>
                        <ul style="color:#444; font-size:14px; line-height:2; padding-left:20px;">
                            <li>Berusia minimal 6 tahun pada tanggal 1 Juli tahun berjalan (prioritas usia 7 tahun).</li>
                            <li>Mengisi formulir pendaftaran peserta didik baru.</li>
                            <li>Fotokopi Akta Kelahiran (2 lembar).</li>
                            <li>Fotokopi Kartu Keluarga (2 lembar).</li>
                            <li>Fotokopi KTP Orang Tua / Wali (2 lembar).</li>
                            <li>Pas Foto berwarna ukuran 3x4 sebanyak 4 lembar.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:16px; padding:32px; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-top:5px solid #FFD700;">
                        <h3 style="font-size:22px; font-weight:800; color:#8B0000; margin-bottom:16px;">Formulir Pendaftaran Online</h3>
                        <form action="{{ url('ppdb') }}" method="GET">
                            <div class="form-group" style="margin-bottom:14px;">
                                <label style="font-weight:600; color:#333;">Nama Lengkap Calon Siswa</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap anak" required>
                            </div>
                            <div class="form-group" style="margin-bottom:14px;">
                                <label style="font-weight:600; color:#333;">Nama Orang Tua / Wali</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama orang tua/wali" required>
                            </div>
                            <div class="form-group" style="margin-bottom:14px;">
                                <label style="font-weight:600; color:#333;">Nomor Telepon / WhatsApp</label>
                                <input type="text" class="form-control" placeholder="Contoh: 081234567890" required>
                            </div>
                            <div class="form-group" style="margin-bottom:20px;">
                                <label style="font-weight:600; color:#333;">Alamat Lengkap</label>
                                <textarea class="form-control" rows="3" placeholder="Masukkan alamat tempat tinggal"></textarea>
                            </div>
                            <button type="submit" style="background:#CC0000; color:#FFFFFF; border:none; padding:12px 28px; border-radius:25px; font-weight:700; font-size:14px; cursor:pointer;">
                                <i class="fa fa-paper-plane" style="margin-right:6px;"></i>Kirim Pendaftaran
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
