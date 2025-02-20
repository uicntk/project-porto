
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        max-width: 1500px; /* Adjust as needed */
        height: 500px; /* Adjust as needed */
        margin-top: -150px;
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
    .modals {
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
    .modals-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Add Animation */
    .modals-content, #caption {  
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

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modals-content {
            width: 100%;
        }
    }

</style>
<div class="card">
    <div class="card-content">
        <div class="text-side">
            <h2>ようこそ私の世界へ</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa officia consequatur dolor voluptas obcaecati, aut corrupti qui ullam? Excepturi asperiores velit perferendis consequuntur cum temporibus quasi architecto odit distinctio corrupti? </p>
        </div>
        <div class="image-side">
            <div class="swiper myswiper" style="margin-top: 250px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img id="myImg1" onClick="modFunc(this.id)" src="{{URL::asset('img/images/1.png')}}" />
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
            <div id="myModals" class="modals">
                <img class="modals-content" id="img01">
            </div>
        </div>
    </div>
</div>

<script>
    function modFunc(id) {
        console.log(id)
        // Get the modal
        var modal = document.getElementById("myModals");

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