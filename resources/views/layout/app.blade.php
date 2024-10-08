<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link href="{{URL::asset('assets/css/randomize.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/newtemplate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/card.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/newslider.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Sougetsu Ui</title>
    <style>

        video {
            width: 100%;
            height: 100%;
            opacity: 0.5; /* Adjust for desired transparency */
        }
        
    </style>
    @yield('css')
</head>
<body>
    <div id="splash-screen" class="container">
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="result" id="result-text"></div>
    </div>
    
    <div id="main-content" class="main-content" style="display: none;">
        <header>
            <nav>
                <button id="burgerMenu" class="burger-menu">&#9776;</button>
                <div id="navLinks">
                    <a href="" id="homeLink" class="active">Home</a>
                    <a href="" id="aboutLink">About</a>
                    <a href="" id="galleryLink">Gallery</a>
                    <a href="" id="contactLink">Contact</a>
                </div>
            </nav>
        </header>
        <div id="app" class="container">
            <section id="home" class="page active">
                @yield('home')
            </section>
            <section id="about" class="page">
                @yield('about')
            </section>
            <section id="gallery" class="page">
                @yield('gallery')
            </section>
            <section id="contact" class="page">
                @yield('contact')
            </section>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="video-container" id="videos" style="display:none;">
        <video autoplay muted playsinline>
            <source src="https://wutheringwaves.kurogames.com/static4.0/assets/end-en-eb5ab687.mp4" type="video/mp4">
        </video>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{URL::asset('assets/js/newtemplate.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var time = new Date().getTime();
        $(document.body).bind("mousemove keypress", function(e) {
            time = new Date().getTime();
        });

        function refresh() {
            if(new Date().getTime() - time >= 60000) 
                window.location.reload(true);
            else 
                setTimeout(refresh, 10000);
        }

        setTimeout(refresh, 10000);
    </script>
</body>
</html>