<!doctype html>
<html class="no-js" lang="id">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | SDN Dr. Samsi</title>
    <meta name="description" content="Website Resmi SDN Dr. Samsi - Sekolah Dasar Negeri Dr. Samsi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Assets/Frontend/img/favicon.png')}}">
    @include('layouts.Frontend.style')
    <style>
        body { font-family: 'Poppins', 'Roboto', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', 'Roboto', sans-serif; }

        /* Announcement Bar */
        .announcement-bar {
            background: linear-gradient(90deg, #CC0000, #8B0000);
            padding: 10px 0;
            text-align: center;
            font-size: 13px;
            font-weight: 500;
            color: #FFFFFF;
            overflow: hidden;
        }

        .announcement-bar .marquee-wrapper {
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .announcement-bar .badge-new {
            background: #FFD700;
            color: #CC0000;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1px;
            flex-shrink: 0;
        }

        /* Back to Top */
        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 46px;
            height: 46px;
            background: #CC0000;
            color: #FFFFFF;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            z-index: 9999;
            box-shadow: 0 4px 15px rgba(204,0,0,0.35);
            transition: all 0.3s;
            text-decoration: none;
        }

        #backToTop:hover {
            background: #8B0000;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(204,0,0,0.4);
        }

        #backToTop.show { display: flex; }

        /* Preloader */
        #preloader {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: #FFFFFF;
            z-index: 999999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .loader-ring {
            width: 60px;
            height: 60px;
            border: 5px solid #FFE5E5;
            border-top: 5px solid #CC0000;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-bottom: 16px;
        }

        .loader-text {
            font-size: 14px;
            font-weight: 600;
            color: #CC0000;
            letter-spacing: 1px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Section divider */
        .divider-red {
            height: 3px;
            background: linear-gradient(to right, #CC0000, #FFD700, #CC0000);
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader-ring"></div>
        <div class="loader-text">SDN DR. SAMSI</div>
    </div>

    <!-- Announcement Bar -->
    <div class="announcement-bar">
        <div class="container">
            <span class="badge-new">INFO</span>
            &nbsp;
            <marquee behavior="scroll" direction="left" scrollamount="4" style="width: 85%; display: inline-block; vertical-align: middle;">
                Selamat Datang di Website Resmi SDN Dr. Samsi &nbsp;|&nbsp;
                Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran Baru Telah Dibuka &nbsp;|&nbsp;
                Hubungi kami untuk informasi lebih lanjut
            </marquee>
        </div>
    </div>

    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area -->
        <header>
           @include('frontend.content.header')
        </header>

        <!-- Slider Area -->
        <div class="slider1-area overlay-default">
            @yield('slider')
        </div>

        <!-- About Area -->
        @yield('about')

        <!-- Video Area -->
        @yield('video')

        <!-- Lecturers Area -->
        @yield('guru')

        <!-- News and Event Area -->
        @yield('beritaEvent')

        <!-- Footer Area -->
        <footer>
            @include('frontend.content.footer')
        </footer>
    </div>
    <!-- Main Body Area End Here -->

    <!-- Back to Top -->
    <a href="#" id="backToTop" title="Kembali ke atas">
        <i class="fa fa-chevron-up"></i>
    </a>

    @include('layouts.Frontend.scripts')

    <script>
        // Preloader
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
            }, 400);
        });

        // Back to top
        window.addEventListener('scroll', function() {
            var btn = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                btn.classList.add('show');
            } else {
                btn.classList.remove('show');
            }
        });

        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>

</html>
