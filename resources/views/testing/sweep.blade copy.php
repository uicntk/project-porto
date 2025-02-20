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
            height: 500px; /* Adjust as needed */
            margin: auto; /* Center horizontally */
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 400px;
            height: 400px;
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
        
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
        }

    </style>
</head>
<body>
    <div class="swiper mySwiper" style="margin-top: 250px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img id="myImg" onClick="modFunc(this.id)" src="{{URL::asset('img/images/1.png')}}" />
            </div>
            <div class="swiper-slide">
                <img id="myImg2" onClick="modFunc(this.id)" src="{{URL::asset('img/images/2.jpg')}}" />
            </div>
            <div class="swiper-slide">
                <img id="myImg3" onClick="modFunc(this.id)" src="{{URL::asset('img/images/3.jpg')}}" />
            </div>
            <div class="swiper-slide">
                <img id="myImg4" onClick="modFunc(this.id)" src="{{URL::asset('img/images/4.png')}}" />
            </div>
            <div class="swiper-slide">
                <img id="myImg5" onClick="modFunc(this.id)" src="{{URL::asset('img/images/5.jfif')}}" />
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
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <img class="modal-content" id="img01">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                delay: 5000, // Delay in milliseconds
                pauseOnMouseEnter: true,
                disableOnInteraction: false, // Continue autoplay after user interactions
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        
        swiper.update();

        function modFunc(id) {
            console.log(id)
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById(id);
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = img.src;

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
