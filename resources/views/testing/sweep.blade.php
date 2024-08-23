<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Eva</title>
    <style>
        .swiper {
            width: 100%;
            max-width: 1500px; /* Adjust as needed */
            height: 300px; /* Adjust as needed */
            margin: auto; /* Center horizontally */
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            /* Center the slide content */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden; /* Hide any overflow content */
            transition: transform 0.3s ease; /* Smooth transition for scaling effect */
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure images cover the slide area */
            transition: transform 0.3s ease; /* Smooth transition for scaling effect */
        }

        .swiper-slide:hover img {
            transform: scale(1.1); /* Enlarge the image by 10% on hover */
            z-index: 1; /* Ensure the enlarged image appears above other content */
        }

        /* Blur effect for non-active slides */
        .swiper-slide:not(.swiper-slide-active) {
            filter: blur(2px); /* Adjust the blur amount as needed */
            opacity: 0.4; /* Optional: Adjust the opacity for better effect */
        }

    </style>
</head>
<body>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            centeredSlides: true,
            observer: true,
            observeParents: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            loop: true, // Enable infinite loop
            autoplay: {
                delay: 3000, // Delay in milliseconds (3 seconds)
                disableOnInteraction: false, // Continue autoplay after user interactions
            }
        });
        swiper.update();
    </script>
</body>
</html>
