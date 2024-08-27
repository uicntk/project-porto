<div class="slider-container">
    <div class="gallery">
        <!-- Original images -->
        <a href="#" class="image-container">
            <img src="http://127.0.0.1:8000/assets/img/images/6.jfif" alt="Image 1" >
            <div class="image-title">Title 1</div>
        </a>
        <a href="#" class="image-container">
            <img src="http://127.0.0.1:8000/assets/img/images/m1.jpg" alt="Image 3" id="myImg">
            <div class="image-title">Title 2</div>
        </a>
        <a href="#" class="image-container">
            <img src="http://127.0.0.1:8000/assets/img/images/5.jfif" alt="Image 2" >
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
            <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
        </div>
        <div class="column">
            <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
        </div>
        <div class="column">
            <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
        </div>
        <div class="column">
            <img src="{{URL::asset('img/images/6.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/2.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/3.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/4.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/5.jfif')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/9.png')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/8.jpg')}}" loading="lazy" style="width:100%">
            <img src="{{URL::asset('img/images/1.png')}}" loading="lazy" style="width:100%">
        </div>
    </div>
</div>