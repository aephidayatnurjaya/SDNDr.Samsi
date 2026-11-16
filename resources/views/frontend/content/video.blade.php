{{-- ===== VIDEO SECTION ===== --}}
<div style="background:linear-gradient(135deg, #CC0000 0%, #8B0000 100%); padding: 70px 0; position:relative; overflow:hidden;">
    {{-- Dekorasi lingkaran --}}
    <div style="position:absolute; top:-80px; right:-80px; width:300px; height:300px; background:rgba(255,255,255,0.05); border-radius:50%;"></div>
    <div style="position:absolute; bottom:-60px; left:-60px; width:220px; height:220px; background:rgba(255,255,255,0.04); border-radius:50%;"></div>
    <div style="position:absolute; top:50%; left:30px; width:80px; height:80px; background:rgba(255,215,0,0.1); border-radius:50%; transform:translateY(-50%);"></div>

    <div class="container" style="position:relative; z-index:1;">
        <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">

            {{-- Teks video --}}
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                <div style="margin-bottom:30px;">
                    <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); border-radius:25px; padding:5px 16px; margin-bottom:16px;">
                        <i class="fa fa-play-circle" style="color:#FFD700; font-size:14px;"></i>
                        <span style="font-size:12px; font-weight:700; color:rgba(255,255,255,0.9); letter-spacing:1px; text-transform:uppercase;">Video Profil</span>
                    </div>
                    <h2 class="video-title" style="font-size:30px; font-weight:800; color:#FFFFFF; margin-bottom:14px; line-height:1.3;">Mengenal Lebih Dekat SDN Dr. Samsi</h2>
                    <p style="color:rgba(255,255,255,0.8); font-size:15px; line-height:1.7; margin-bottom:28px;">
                        Saksikan suasana kegiatan belajar mengajar, fasilitas sekolah, serta berbagai aktivitas ekstrakurikuler siswa-siswi SDN Dr. Samsi.
                    </p>

                    <div style="display:flex; gap:14px; flex-wrap:wrap;">
                        <a class="popup-youtube"
                           href="https://www.youtube.com/watch?v=1iIZeIy7TqM"
                           style="display:inline-flex; align-items:center; gap:10px; padding:14px 28px; background:#FFFFFF; color:#CC0000; border-radius:30px; font-weight:700; font-size:14px; transition:all 0.3s; box-shadow:0 4px 15px rgba(0,0,0,0.2);">
                            <span style="display:inline-flex; align-items:center; justify-content:center; width:30px; height:30px; background:#CC0000; border-radius:50%;">
                                <i class="fa fa-play" style="color:#FFFFFF; font-size:12px; padding-left:2px;"></i>
                            </span>
                            Tonton Sekarang
                        </a>
                    </div>
                </div>
            </div>

            {{-- Thumbnail video --}}
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                <div style="position:relative; border-radius:16px; overflow:hidden; box-shadow:0 20px 50px rgba(0,0,0,0.3);">
                    <img src="{{ asset('Assets/Frontend/img/banner/1.jpg') }}"
                         alt="Video Sekolah"
                         style="width:100%; height:300px; object-fit:cover; display:block;">

                    {{-- Overlay gelap --}}
                    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.3);"></div>

                    {{-- Tombol play di tengah --}}
                    <a class="popup-youtube"
                       href="https://www.youtube.com/watch?v=1iIZeIy7TqM"
                       style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:76px; height:76px; background:rgba(255,255,255,0.95); border-radius:50%; display:flex; align-items:center; justify-content:center; color:#CC0000; font-size:30px; padding-left:5px; box-shadow:0 8px 25px rgba(0,0,0,0.3); transition:all 0.3s;"
                       onmouseover="this.style.transform='translate(-50%,-50%) scale(1.1)'; this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                       onmouseout="this.style.transform='translate(-50%,-50%) scale(1)'; this.style.background='rgba(255,255,255,0.95)'; this.style.color='#CC0000';">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </a>

                    {{-- Label di pojok --}}
                    <div style="position:absolute; top:20px; left:20px; background:#CC0000; color:#FFFFFF; padding:5px 14px; border-radius:20px; font-size:12px; font-weight:700;">
                        <i class="fa fa-film" style="margin-right:5px;"></i>Video Profil
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
