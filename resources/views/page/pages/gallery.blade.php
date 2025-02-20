<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
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
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/1.png')}}">
                <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            </a>
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            </a>
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
            <a data-fancybox="gallery" data-src="{{URL::asset('img/images/6.jfif')}}">
                <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            </a>
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
            Slideshow: {
                progressParentEl: (slideshow) => {
                    return slideshow.instance.container;
                }
            },
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