@extends('layouts.Frontend.app')

@section('title')
    Dashboard - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    <div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding:50px 0;">
        <div class="container">
            <h1 style="font-size:32px; font-weight:800; color:#FFFFFF; margin:0 0 8px;">
                <i class="fa fa-tachometer" style="margin-right:10px; color:#FFD700;"></i>Dashboard Akademik SDN Dr. Samsi
            </h1>
            <p style="color:rgba(255,255,255,0.85); margin:0;">Selamat datang di halaman pengelola Sistem Informasi SDN Dr. Samsi.</p>
        </div>
    </div>

    <div style="padding:60px 0; background:#FFF5F5;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:24px; text-align:center; border-top:4px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <h2 style="font-size:32px; font-weight:800; color:#CC0000; margin:0;">520</h2>
                        <p style="color:#666; margin:6px 0 0; font-weight:600;">Total Siswa Aktif</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:24px; text-align:center; border-top:4px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <h2 style="font-size:32px; font-weight:800; color:#8B0000; margin:0;">32</h2>
                        <p style="color:#666; margin:6px 0 0; font-weight:600;">Tenaga Pengajar</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:24px; text-align:center; border-top:4px solid #CC0000; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <h2 style="font-size:32px; font-weight:800; color:#CC0000; margin:0;">18</h2>
                        <p style="color:#666; margin:6px 0 0; font-weight:600;">Rombongan Belajar</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:14px; padding:24px; text-align:center; border-top:4px solid #FFD700; box-shadow:0 4px 15px rgba(0,0,0,0.06); margin-bottom:20px;">
                        <h2 style="font-size:32px; font-weight:800; color:#8B0000; margin:0;">A</h2>
                        <p style="color:#666; margin:6px 0 0; font-weight:600;">Akreditasi Sekolah</p>
                    </div>
                </div>
            </div>
            <div style="text-align:center; margin-top:20px;">
                <a href="{{ url('/') }}" style="display:inline-block; padding:12px 28px; background:#CC0000; color:#FFFFFF; border-radius:25px; font-weight:700;">
                    <i class="fa fa-home" style="margin-right:6px;"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
    @endsection
@endsection
