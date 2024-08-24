<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link href="{{URL::asset('assets/css/randomize.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/newtemplate.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Sougetsu Ui</title>
    <style>
        .card {
            width: 100%;
            max-width: 1500px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.2); /* White with 80% opacity */
            backdrop-filter: blur(10px); /* Optional: Adds a blur effect to the background behind the card */
            /* Ensure the card has a defined height */
            height: 700px; /* Adjust this value as needed */
        }

        .card_about {
            width: 100%;
            max-width: 1200px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.2); /* White with 80% opacity */
            backdrop-filter: blur(10px); /* Optional: Adds a blur effect to the background behind the card */
        }

        .card-content {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            height: 100%;
        }

        .text-side {
            flex: 1;
            padding: 20px;
            background-color: transparent; /* Ensure text side background is transparent */
        }

        .image-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            height: 100%;
        }

        .swiper {
            width: 100%;
            height: 100%; /* Make sure Swiper takes up the full height of the container */
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%; /* Ensure slides fill the container height */
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

        @media (max-width: 768px) {
            .card-content {
                flex-direction: column;
            }

            .text-side,
            .image-side {
                width: 100%;
            }

            .text-side {
                order: 2;
            }

            .image-side {
                order: 1;
            }
        }
    </style>
</head>
<body>
    <div id="splash-screen" class="container">
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="loading">Loading...</div>
        <div class="result" id="result-text">Transforming...</div>
    </div>
    
    <div id="main-content" class="main-content" style="display: none;">
        <header>
            <nav>
                <button id="burgerMenu" class="burger-menu">&#9776;</button>
                <div id="navLinks">
                    <a href="#" id="homeLink">Home</a>
                    <a href="#" id="aboutLink">About</a>
                    <a href="#" id="galleryLink">Gallery</a>
                    <a href="#" id="contactLink">Contact</a>
                    <a href="#" id="imageLink">Image</a>
                </div>
            </nav>
        </header>
        <div id="app" class="container">
            <section id="home" class="page active">
                <div class="card">
                    <div class="card-content">
                        <div class="text-side">
                            <h2>Card Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna nec sem auctor fringilla.</p>
                        </div>
                        <div class="image-side">
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/1.png')}}" alt="Image 1" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/2.jpg')}}" alt="Image 2" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/3.jpg')}}" alt="Image 3" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/4.png')}}" alt="Image 4" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/5.jfif')}}" alt="Image 5" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/6.jfif')}}" alt="Image 6" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/7.jpg')}}" alt="Image 7" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/8.jpg')}}" alt="Image 8" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{URL::asset('img/images/9.png')}}" alt="Image 9" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="page">
                <div class="card_about">
                    <div class="card-content">
                        <div class="text-side">
                            <h2>Card Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna nec sem auctor fringilla.</p>
                        </div>
                        <div class="image-side">
                            <img src="{{URL::asset('img/images/1.png')}}" alt="Image 1" />
                        </div>
                    </div>
                </div>
            </section>
            <section id="gallery" class="page">Gallery Content</section>
            <section id="contact" class="page">Contact Content</section>
            <section id="image" class="page">Image Content</section>
        </div>
    </div>
    <script src="{{URL::asset('assets/js/newtemplate.js')}}"></script>
    <script src="{{URL::asset('assets/js/randomize.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
