<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style>
    
    .gal {
        position: relative;
        width: 100%;
    }

    .overlayimg {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: rgba(255, 255, 255, 0.295); /* White with 80% opacity */
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
    }

    .overlayimgr {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.295); /* White with 80% opacity */
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
    }

    .gal:hover .overlayimg {
        width: 100%;
        left: 0;
    }

    .textimg {
        color: white;
        font-size: 40px;
        position: absolute;
        top: 90%;
        left: 50%;
        color: #000000;
        font-weight: bold;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        white-space: nowrap;
    }

    .textimgr {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        white-space: nowrap;
    }
</style>
<div class="slider-container">
    <div class="gallery">
        <!-- Original images -->
        <a href="#" class="image-container">
            <img src="{{URL::asset('assets/img/images/6.jfif')}}" alt="Image 1" >
            <div class="image-title">Title 1</div>
        </a>
        <a href="#" class="image-container">
            <img src="{{URL::asset('assets/img/images/m1.jpg')}}" alt="Image 3" id="myImg">
            <div class="image-title">Title 2</div>
        </a>
        <a href="#" class="image-container">
            <img src="{{URL::asset('assets/img/images/5.jfif')}}" alt="Image 2" >
            <div class="image-title">Title 3</div>
        </a>
    </div>
    <button class="nav-button left">&#10094;</button>
    <button class="nav-button right">&#10095;</button>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="row"> 
        <div class="column">
            <div class="gal">
                <a data-fancybox="gallery" data-src="{{URL::asset('img/images/1.png')}}">
                    <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
                    <div class="overlayimg">
                        <div class="textimg">Large Priview</div>
                    </div>
                </a>
            </div>
            <div class="gal">
                <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                    <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
                    <div class="overlayimg">
                        <div class="textimg">Large Priview</div>
                    </div>
                </a>
            </div>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/2.jpg')}}">
                <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/3.jpg')}}">
                <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/4.png')}}">
                <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/5.jfif')}}">
                <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/9.png')}}">
                <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/8.jpg')}}">
                <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            </a>
        </div>
        <div class="column"> 
            <div class="gal">
                <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                    <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
                    <div class="overlayimg">
                        <div class="textimg">Large Priview</div>
                    </div>
                </a>
            </div>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/2.jpg')}}">
                <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/3.jpg')}}">
                <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/4.png')}}">
                <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/8.jpg')}}">
                <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/5.jfif')}}">
                <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/9.png')}}">
                <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/1.png')}}">
                <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            </a>
        </div>
        <div class="column"> 
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/8.jpg')}}">
                <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/1.png')}}">
                <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/2.jpg')}}">
                <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/5.jfif')}}">
                <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/3.jpg')}}">
                <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/4.png')}}">
                <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/9.png')}}">
                <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            </a>
        </div>
        <div class="column"> 
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/8.jpg')}}">
                <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/2.jpg')}}">
                <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/4.png')}}">
                <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/3.jpg')}}">
                <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/1.png')}}">
                <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/5.jfif')}}">
                <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/9.png')}}">
                <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            Thumbs: false,
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [
                        "zoomIn",
                        "zoomOut",
                        "toggle1to1",
                        "download",
                        "slideshow",
                        "rotateCCW",
                        "rotateCW",
                        "flipX",
                        "flipY",
                        "thumbs",
                    ],
                    right: [ "close"],
                },
            },
        });    
</script>