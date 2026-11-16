@php
    $sliders = [
        [
            'image' => asset('Assets/Frontend/img/slider/1.jpg'),
            'title' => 'Selamat Datang di SDN Dr. Samsi',
            'desc'  => 'Mewujudkan generasi cerdas, berkarakter mulia, berprestasi, dan berjiwa Pancasila melalui lingkungan belajar yang nyaman dan inspiratif.',
        ],
        [
            'image' => asset('Assets/Frontend/img/slider/2.jpg'),
            'title' => 'Pendidikan Berkualitas & Berkarakter',
            'desc'  => 'Didukung oleh tenaga pendidik profesional dan fasilitas belajar lengkap untuk mengembangkan potensi terbaik setiap peserta didik.',
        ],
    ];
@endphp

<div class="bend niceties preview-1">
    <div id="ensign-nivoslider-3" class="slides" style="max-height: 550px">
        @foreach ($sliders as $key => $item)
            <img src="{{ $item['image'] }}" alt="slider" title="#slider-direction-{{ $key + 1 }}" style="max-height: 550px"/>
        @endforeach
    </div>

    @foreach ($sliders as $key => $item)
        <div id="slider-direction-{{ $key + 1 }}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-{{ $key + 1 }}">
                <div class="title-container s-tb-c">
                    <div class="title1">{{ $item['title'] }}</div>
                    <p>{{ $item['desc'] }}</p>
                    <div class="slider-btn-area">
                        <a href="{{ url('ppdb') }}" class="default-big-btn">Daftar !</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
