@extends('layouts.Frontend.app')

@section('title')
    Masuk - SDN Dr. Samsi
@endsection

@section('content')
    @section('about')
    <div style="background:linear-gradient(135deg, #FFF5F5 0%, #FFFFFF 100%); padding:70px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                    <div style="background:#FFFFFF; border-radius:16px; padding:40px 32px; box-shadow:0 10px 35px rgba(204,0,0,0.12); border-top:5px solid #CC0000;">
                        <div style="text-align:center; margin-bottom:28px;">
                            <img src="{{ asset('Assets/Frontend/img/logo-footer.png') }}" alt="SDN Dr. Samsi" style="max-height:60px; margin-bottom:12px;">
                            <h2 style="font-size:24px; font-weight:800; color:#CC0000; margin:0 0 6px;">Portal Akademik SDN Dr. Samsi</h2>
                            <p style="color:#666; font-size:14px; margin:0;">Silakan pilih peran dan masuk ke akun Anda</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group" style="margin-bottom:18px;">
                                <label style="font-weight:600; color:#333; margin-bottom:6px; display:block;">Masuk Sebagai</label>
                                <select name="role" class="form-control" style="height:44px; border-radius:8px; border:1px solid #FFD0D0; font-weight:600; color:#CC0000;">
                                    <option value="guru">Guru / Tenaga Pengajar</option>
                                    <option value="murid">Murid / Siswa</option>
                                    <option value="admin">Admin Sekolah</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom:18px;">
                                <label style="font-weight:600; color:#333; margin-bottom:6px; display:block;">Email / NISN / NIP</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email, NIP, atau NISN" required style="height:44px; border-radius:8px; border:1px solid #FFD0D0;">
                            </div>
                            <div class="form-group" style="margin-bottom:22px;">
                                <label style="font-weight:600; color:#333; margin-bottom:6px; display:block;">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required style="height:44px; border-radius:8px; border:1px solid #FFD0D0;">
                            </div>
                            <button type="submit" style="width:100%; background:linear-gradient(135deg, #CC0000, #8B0000); color:#FFFFFF; border:none; padding:12px; border-radius:25px; font-weight:700; font-size:15px; cursor:pointer;">
                                <i class="fa fa-sign-in" style="margin-right:6px;"></i> Masuk Sekarang
                            </button>
                        </form>

                        {{-- Pintasan Demo Tanpa Ketik --}}
                        <div style="margin-top:24px; padding-top:18px; border-top:1px dashed #FFE5E5; text-align:center;">
                            <p style="font-size:12px; color:#888; margin-bottom:10px;">Akses Cepat (Demo View):</p>
                            <div style="display:flex; justify-content:center; gap:10px; flex-wrap:wrap;">
                                <a href="{{ route('dashboard.guru') }}" style="padding:7px 16px; background:#FFF5F5; color:#CC0000; border:1px solid #FFD0D0; border-radius:20px; font-size:12px; font-weight:700;">
                                    <i class="fa fa-user" style="margin-right:4px;"></i>Dashboard Guru
                                </a>
                                <a href="{{ route('dashboard.murid') }}" style="padding:7px 16px; background:#FFF5F5; color:#8B0000; border:1px solid #FFD700; border-radius:20px; font-size:12px; font-weight:700;">
                                    <i class="fa fa-graduation-cap" style="margin-right:4px;"></i>Dashboard Murid
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection