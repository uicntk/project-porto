<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://cdn.discordapp.com/attachments/715408886064218152/1263335951267266713/kirby-dance.gif?ex=66c40cca&is=66c2bb4a&hm=59fc0a8d6fcff2cebfe193310018000bed2d1ff8303478413f8a040ad0c34e70&" type="image/gif">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="{{URL::asset('css/index.css')}}" rel="stylesheet" type="text/css" />
        <title>Eva</title>
    </head>
    <body>
        <div id="splash-screen" class="container">
            <div class="loading">Loading...</div>
            <div class="loading">Loading...</div>
            <div class="loading">Loading...</div>
            <div class="result" style="font-size: 50px;" id="result-text">Transforming...</div>
        </div>
        
        <div id="main-content" class="main-content">
            <div class="main-title" title="Welcome">
                Welcome 
            </div>
            <!-- Swiper -->
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
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{URL::asset('js/index.js')}}"></script>
        <script src="{{URL::asset('js/index_swiper.js')}}"></script>
    </body>
</html>