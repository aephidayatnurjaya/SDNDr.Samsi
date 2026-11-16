{{-- ===== GURU / TENAGA PENGAJAR SECTION ===== --}}
@php
    $daftarGuru = [
        ['nama' => 'Drs. H. Ahmad Fauzi, M.Pd.', 'jabatan' => 'Kepala Sekolah', 'email' => 'kepsek@sdndrsamsi.sch.id'],
        ['nama' => 'Siti Aminah, S.Pd.', 'jabatan' => 'Guru Kelas VI', 'email' => 'siti.aminah@sdndrsamsi.sch.id'],
        ['nama' => 'Budi Santoso, S.Pd.', 'jabatan' => 'Guru Matematika & IPA', 'email' => 'budi.santoso@sdndrsamsi.sch.id'],
        ['nama' => 'Rina Kartika, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia', 'email' => 'rina.kartika@sdndrsamsi.sch.id'],
        ['nama' => 'Hendri Pratama, S.Or.', 'jabatan' => 'Guru PJOK', 'email' => 'hendri.pratama@sdndrsamsi.sch.id'],
    ];
@endphp

<div style="background:#FFF5F5; padding:70px 0;">
    <div class="container">
        {{-- Judul section --}}
        <div style="text-align:center; margin-bottom:50px;">
            <div style="display:inline-flex; align-items:center; gap:8px; margin-bottom:12px;">
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
                <span style="font-size:12px; font-weight:700; color:#CC0000; letter-spacing:2px; text-transform:uppercase;">Tim Pengajar</span>
                <span style="display:inline-block; width:30px; height:3px; background:#CC0000; border-radius:2px;"></span>
            </div>
            <h2 style="font-size:30px; font-weight:800; color:#212121;">
                Tenaga <span style="color:#CC0000;">Pengajar Kami</span>
            </h2>
            <p style="color:#888; font-size:15px; margin-top:10px; max-width:500px; margin-left:auto; margin-right:auto;">
                Didukung oleh guru-guru berpengalaman, berdedikasi, dan bersertifikasi untuk memberikan pendidikan terbaik.
            </p>
        </div>

        {{-- Carousel Guru --}}
        <div class="rc-carousel"
             data-loop="true"
             data-items="4"
             data-margin="24"
             data-autoplay="true"
             data-autoplay-timeout="4000"
             data-smart-speed="800"
             data-dots="true"
             data-nav="true"
             data-nav-speed="false"
             data-r-x-small="1"
             data-r-x-small-nav="false"
             data-r-x-small-dots="true"
             data-r-x-medium="2"
             data-r-x-medium-nav="false"
             data-r-x-medium-dots="true"
             data-r-small="3"
             data-r-small-nav="true"
             data-r-small-dots="false"
             data-r-medium="4"
             data-r-medium-nav="true"
             data-r-medium-dots="false"
             data-r-large="4"
             data-r-large-nav="true"
             data-r-large-dots="false">
            @foreach ($daftarGuru as $guru)
                <div class="single-item">
                    <div style="background:#FFFFFF; border-radius:16px; padding:28px 20px; text-align:center; box-shadow:0 4px 20px rgba(0,0,0,0.07); border-bottom:4px solid transparent; transition:all 0.3s; margin:5px;"
                         onmouseover="this.style.transform='translateY(-8px)'; this.style.borderBottomColor='#CC0000'; this.style.boxShadow='0 15px 35px rgba(204,0,0,0.15)';"
                         onmouseout="this.style.transform='translateY(0)'; this.style.borderBottomColor='transparent'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.07)';">

                        {{-- Foto guru --}}
                        <div style="width:100px; height:100px; border-radius:50%; overflow:hidden; border:4px solid #FFE5E5; margin:0 auto 16px; transition:border-color 0.3s;">
                            <img src="{{ asset('Assets/Frontend/img/user.png') }}"
                                 alt="{{ $guru['nama'] }}"
                                 style="width:100%; height:100%; object-fit:cover;">
                        </div>

                        {{-- Nama & jabatan --}}
                        <h4 style="font-size:16px; font-weight:700; color:#CC0000; margin-bottom:4px;">{{ $guru['nama'] }}</h4>
                        <p style="font-size:12px; color:#888; margin-bottom:14px; font-style:italic;">{{ $guru['jabatan'] }}</p>

                        {{-- Sosial media --}}
                        <div style="display:flex; justify-content:center; gap:8px;">
                            <a href="mailto:{{ $guru['email'] }}"
                               style="width:30px; height:30px; border-radius:50%; background:#FFF5F5; border:1px solid #FFE5E5; display:inline-flex; align-items:center; justify-content:center; color:#CC0000; font-size:13px; transition:all 0.2s;"
                               onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                               onmouseout="this.style.background='#FFF5F5'; this.style.color='#CC0000';">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
