{{-- ===== FOOTER AREA ===== --}}
<div style="background:linear-gradient(180deg, #1a0000 0%, #0d0000 100%); padding:60px 0 30px;">
    <div class="container">
        <div class="row">

            {{-- Kolom 1: Logo & Deskripsi --}}
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div style="margin-bottom:30px;">
                    <a href="/">
                        @if (@$footer->logo == NULL)
                            <img src="{{asset('Assets/Frontend/img/logo-footer.png')}}"
                                 alt="SDN Dr. Samsi"
                                 style="max-height:70px; margin-bottom:16px; filter: brightness(0) invert(1); opacity:0.9;">
                        @else
                            <img src="{{asset('storage/images/logo/' .$footer->logo)}}"
                                 alt="SDN Dr. Samsi"
                                 style="max-height:70px; margin-bottom:16px;">
                        @endif
                    </a>

                    <h4 style="color:#FFFFFF; font-size:17px; font-weight:700; margin-bottom:8px;">SDN Dr. Samsi</h4>
                    <div style="width:40px; height:3px; background:linear-gradient(to right, #CC0000, #FFD700); border-radius:2px; margin-bottom:14px;"></div>

                    <p style="color:rgba(255,255,255,0.65); font-size:14px; line-height:1.8; margin-bottom:20px;">
                        {{@$footer->desc ?: 'Sekolah Dasar Negeri Dr. Samsi berkomitmen memberikan pendidikan berkualitas, membentuk generasi bangsa yang cerdas, berkarakter, dan berjiwa Pancasila.'}}
                    </p>

                    {{-- Sosial media --}}
                    <div style="display:flex; gap:8px;">
                        @if(@$footer->linkedin)
                        <a href="{{'https://www.linkedin.com/in/'.@$footer->linkedin}}" target="_blank"
                           style="width:36px; height:36px; border-radius:50%; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.1); display:inline-flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.65); font-size:14px; transition:all 0.3s;"
                           onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF'; this.style.transform='translateY(-3px)';"
                           onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.color='rgba(255,255,255,0.65)'; this.style.transform='translateY(0)';">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        @endif
                        @if(@$footer->twitter)
                        <a href="{{'https://www.twitter.com/'.@$footer->twitter}}" target="_blank"
                           style="width:36px; height:36px; border-radius:50%; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.1); display:inline-flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.65); font-size:14px; transition:all 0.3s;"
                           onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF'; this.style.transform='translateY(-3px)';"
                           onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.color='rgba(255,255,255,0.65)'; this.style.transform='translateY(0)';">
                            <i class="fa fa-twitter"></i>
                        </a>
                        @endif
                        @if(@$footer->facebook)
                        <a href="{{'https://www.facebook.com/'.@$footer->facebook}}" target="_blank"
                           style="width:36px; height:36px; border-radius:50%; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.1); display:inline-flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.65); font-size:14px; transition:all 0.3s;"
                           onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF'; this.style.transform='translateY(-3px)';"
                           onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.color='rgba(255,255,255,0.65)'; this.style.transform='translateY(0)';">
                            <i class="fa fa-facebook"></i>
                        </a>
                        @endif
                        <a href="{{'https://www.instagram.com/'.@$footer->instagram}}" target="_blank"
                           style="width:36px; height:36px; border-radius:50%; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.1); display:inline-flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.65); font-size:14px; transition:all 0.3s;"
                           onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF'; this.style.transform='translateY(-3px)';"
                           onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.color='rgba(255,255,255,0.65)'; this.style.transform='translateY(0)';">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Kolom 2: Informasi Kontak + Jam --}}
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div style="margin-bottom:30px;">
                    <h4 style="color:#FFFFFF; font-size:17px; font-weight:700; margin-bottom:8px;">Kontak & Informasi</h4>
                    <div style="width:40px; height:3px; background:linear-gradient(to right, #CC0000, #FFD700); border-radius:2px; margin-bottom:20px;"></div>

                    <ul style="list-style:none; padding:0; margin:0 0 24px;">
                        <li style="display:flex; align-items:flex-start; gap:12px; color:rgba(255,255,255,0.65); font-size:14px; padding:9px 0; border-bottom:1px solid rgba(255,255,255,0.05);">
                            <i class="fa fa-map-marker" style="color:#CC0000; margin-top:3px; flex-shrink:0;"></i>
                            <span>{{@$footer->alamat ?: 'Jl. Dr. Samsi, Jakarta, Indonesia'}}</span>
                        </li>
                        <li style="display:flex; align-items:center; gap:12px; color:rgba(255,255,255,0.65); font-size:14px; padding:9px 0; border-bottom:1px solid rgba(255,255,255,0.05);">
                            <i class="fa fa-phone" style="color:#CC0000; flex-shrink:0;"></i>
                            <a href="tel:{{@$footer->telp}}" style="color:rgba(255,255,255,0.65); transition:color 0.2s;"
                               onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.65)';">
                                {{@$footer->telp ?: '-'}}
                            </a>
                        </li>
                        <li style="display:flex; align-items:center; gap:12px; color:rgba(255,255,255,0.65); font-size:14px; padding:9px 0; border-bottom:1px solid rgba(255,255,255,0.05);">
                            <i class="fa fa-envelope-o" style="color:#CC0000; flex-shrink:0;"></i>
                            <span>{{@$footer->email ?: 'info@sdndrsamsi.sch.id'}}</span>
                        </li>
                        <li style="display:flex; align-items:center; gap:12px; color:rgba(255,255,255,0.65); font-size:14px; padding:9px 0;">
                            <i class="fa fa-clock-o" style="color:#CC0000; flex-shrink:0;"></i>
                            <span>Senin–Jumat: 07:00 – 14:00 WIB</span>
                        </li>
                    </ul>

                    {{-- Newsletter subscribe --}}
                    <div>
                        <p style="color:rgba(255,255,255,0.75); font-size:14px; margin-bottom:10px; font-weight:500;">
                            <i class="fa fa-bell" style="color:#FFD700; margin-right:6px;"></i>Ingin dapat berita terbaru?
                        </p>
                        <div style="display:flex; border-radius:30px; overflow:hidden; border:1px solid rgba(255,255,255,0.15);">
                            <input type="email"
                                   placeholder="Masukkan email Anda..."
                                   style="flex:1; background:rgba(255,255,255,0.08); border:none; color:#FFFFFF; padding:10px 16px; font-size:13px; outline:none;"
                                   onfocus="this.style.background='rgba(255,255,255,0.12)';"
                                   onblur="this.style.background='rgba(255,255,255,0.08)';">
                            <button type="button"
                                    style="background:#CC0000; border:none; color:#FFFFFF; padding:10px 18px; cursor:pointer; transition:background 0.3s; flex-shrink:0;"
                                    onmouseover="this.style.background='#8B0000';"
                                    onmouseout="this.style.background='#CC0000';">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom 3: Galeri Foto --}}
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div style="margin-bottom:30px;">
                    <h4 style="color:#FFFFFF; font-size:17px; font-weight:700; margin-bottom:8px;">Galeri Foto</h4>
                    <div style="width:40px; height:3px; background:linear-gradient(to right, #CC0000, #FFD700); border-radius:2px; margin-bottom:20px;"></div>

                    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:6px;">
                        @for($i = 1; $i <= 6; $i++)
                            <div style="border-radius:8px; overflow:hidden; position:relative;">
                                <img src="{{asset('Assets/Frontend/img/footer/'.$i.'.jpg')}}"
                                     alt="Galeri"
                                     style="width:100%; height:70px; object-fit:cover; transition:transform 0.3s, opacity 0.3s; display:block;"
                                     onmouseover="this.style.transform='scale(1.08)'; this.style.opacity='0.8';"
                                     onmouseout="this.style.transform='scale(1)'; this.style.opacity='1';">
                            </div>
                        @endfor
                    </div>

                    {{-- Link Maps --}}
                    <div style="margin-top:16px;">
                        <a href="https://maps.google.com" target="_blank"
                           style="display:inline-flex; align-items:center; gap:8px; color:rgba(255,255,255,0.65); font-size:13px; transition:color 0.2s;"
                           onmouseover="this.style.color='#FFD700';"
                           onmouseout="this.style.color='rgba(255,255,255,0.65)';">
                            <i class="fa fa-map-o" style="color:#CC0000;"></i>
                            Lihat Lokasi di Google Maps
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Footer Bottom --}}
<div style="background:#0a0000; padding:16px 0; border-top:1px solid rgba(204,0,0,0.2);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p style="color:rgba(255,255,255,0.4); font-size:13px; margin:0; text-align:left;">
                    &copy; {{date('Y')}} <strong style="color:#CC0000;">SDN Dr. Samsi</strong>. Hak Cipta Dilindungi.
                    Dibuat dengan <i class="fa fa-heart" style="color:#CC0000;"></i> untuk Pendidikan Indonesia.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:right;">
                <p style="color:rgba(255,255,255,0.3); font-size:12px; margin:0;">
                    <span style="color:rgba(255,255,255,0.4);">Dikembangkan oleh</span>
                    <a href="#" style="color:#CC0000; font-weight:600; margin-left:4px;">Tim IT SDN Dr. Samsi</a>
                </p>
            </div>
        </div>
    </div>
</div>
