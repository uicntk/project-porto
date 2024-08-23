<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <title>Sougetsu Ui</title>
    <!-- <link href="{{URL::asset('assets/css/randomize.css')}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{URL::asset('assets/css/newtemplate.css')}}" rel="stylesheet" type="text/css" />
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
                <button id="burgerMenu" class="burger-menu">&#9776;</button>
                <div id="navLinks">
                    <a href="" id="homeLink">Home</a>
                    <a href="" id="aboutLink">About</a>
                    <a href="" id="galleryLink">Gallery</a>
                    <a href="" id="contactLink">Contact</a>
                    <a href="" id="imageLink">Image</a>
                </div>
            </nav>
        </header>
        <main>
            <div id="app" class="container">
                <section id="home" class="page hidden">Home Content</section>
                <section id="about" class="page hidden">About Content</section>
                <section id="gallery" class="page hidden">Gallery Content</section>
                <section id="contact" class="page hidden">Contact Content</section>
                <section id="image" class="page hidden">Image Content</section>
            </div>
        </main>
    </div>
    <script src="{{URL::asset('assets/js/newtemplate.js')}}"></script>
    <script src="{{URL::asset('assets/js/randomize.js')}}"></script>
</body>
</html>

