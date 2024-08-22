<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="{{URL::asset('css/index.css')}}" rel="stylesheet" type="text/css" />
    <title>Eva</title>
    <style>
    </style>
</head>
<body>
    <div id="splash-screen" class="container">
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="result" style="font-size: 50px;" id="result-text">Transforming...</div>
    </div>
    
    <div id="main-content" class="main-content">
        <header>
            <nav>
                <a href="#" id="homeLink">Home</a>
                <a href="#" id="aboutLink">About</a>
                <a href="#" id="galleryLink">Gallery</a>
                <a href="#" id="contactLink">Contact</a>
            </nav>
        </header>
        <div id="app">
            <section id="home" class="page visible">
                
                <div class="swiper mySwiper" style="margin-top: 250px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/1.png')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/2.jpg')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/3.jpg')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/4.png')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/5.jfif')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/6.jfif')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/7.jpg')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/8.jpg')}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('img/images/9.png')}}" />
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="page hidden">About Content</section>
            <section id="gallery" class="page hidden">Gallery Content</section>
            <section id="contact" class="page hidden">Contact Content</section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{URL::asset('js/index.js')}}"></script>
</body>
</html>
