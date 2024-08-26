<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Eva</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100%;
            scroll-behavior: smooth;
        }

        body {
            font-family: monospace;
            overflow-y: scroll;
            margin: 0;
            padding: 0;
            opacity: 0; /* Start with body hidden */
            transition: opacity 0.5s ease-in-out; /* Smooth transition for opacity */
            color: #000000; /* Text color */
        /* }

        /* Initial hidden state for the header */
        header.hidden {
            display: none;
        } */

        .result {
            font-size: 24px;
            margin-top: 20px;
            color: #000000; /* Text color */
            font-family: monospace;
            position: absolute; /* Allow positioning */
        }

        header {
            background: none; /* Remove background color */
            color: black;
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align items to the left */
            padding: 10px;
            position: relative; /* Establish positioning context */
        }

        nav a {
            color: black; /* Default text color */
            text-decoration: none;
            font-size: 20px;
            padding: 10px 20px;
            border: 2px solid transparent; /* Invisible border by default */
            border-radius: 5px;
            transition: border-color 0.3s ease, color 0.3s ease;
        }

        #menuButton {
            display: none; /* Hidden by default */
            background: none;
            border: none;
            color: white;
            font-size: 24px; /* Adjust size as needed */
            cursor: pointer;
            position: absolute;
            left: -200px; /* Align to the left edge of the nav */
            top: 10px; /* Align to the top edge of the nav */
        }
        #menuButton i {
        display: block; /* Show the menu button on small screens */
        }

        nav a.active {
            background: none; /* No background */
            border-color: black; /* Black border to highlight active link */
            border-bottom: 5px;
            color: black; /* Black text color for visibility */
        }
        
        /* Styles for mobile view */
        @media (max-width: 768px) {
            #navLinks {
                display: none; /* Hide links by default on small screens */
                flex-direction: column;
                width: 100%;
                background-color: #333; /* Ensure the dropdown has a background color */
                position: absolute;
                top: 50px; /* Adjust based on button height */
                left: 0;
                z-index: 1000; /* Ensure dropdown is on top */
            }

            #navLinks a {
                padding: 15px;
                border-top: 1px solid #444; /* Optional: border between links */
            }
            
            #menuButton {
                display: block; /* Show the menu button on small screens */
            }
            
            #navLinks.active {
                display: flex; /* Show links when menu button is active */
            }
        }

        #app {
            display: none; /* Hide initially */
            opacity: 0;    /* Ensure it's not visible initially */
            transition: opacity 0.5s ease-in-out; /* Smooth transition for opacity */
            display: flex;
            flex-direction: row;
            height: 100vh;
            width: 400%;
            position: relative;
            overflow: hidden; /* Hide overflowing content */
        }

        .page {
            flex: 1;
            min-width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #333;
            background-color: #f0f0f0; /* Page background color */
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.5s ease-in-out; /* Smooth fade transition */
            background-image: url('{{URL::asset('img/images/6.jfif')}}'); /* Set your background image */
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating the image */
        }

        .page.hidden {
            opacity: 0; /* Hidden pages */
            z-index: 1;
        }

        .page.visible {
            opacity: 1; /* Visible pages */
            z-index: 2;
        }

        /* Styling for loading text */
        .loading {
            position: absolute;
            font-size: 20px;
            color: #000000; /* Text color */
            font-family: monospace;
            bottom: 20px; /* Adjust this value as needed */
            left: 20px; /* Adjust this value as needed */
            transform: translate(0, 0);
            opacity: 0.8;
            white-space: nowrap;
            pointer-events: none;
        }

        .loading:nth-child(1) {
            z-index: 1;
            animation: glitch-anim-1 0.5s infinite linear;
        }

        .loading:nth-child(2) {
            z-index: 2;
            animation: glitch-anim-2 0.5s infinite linear;
        }

        .loading:nth-child(3) {
            z-index: 3;
            animation: glitch-anim-3 0.5s infinite linear;
        }

        @keyframes glitch-anim-1 {
            0% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
            20% {
                transform: translate(-2px, -2px) skew(-5deg);
                opacity: 0.6;
            }
            40% {
                transform: translate(2px, 2px) skew(5deg);
                opacity: 0.8;
            }
            60% {
                transform: translate(-2px, 2px) skew(-5deg);
                opacity: 0.6;
            }
            80% {
                transform: translate(2px, -2px) skew(5deg);
                opacity: 0.8;
            }
            100% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
        }

        @keyframes glitch-anim-2 {
            0% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
            20% {
                transform: translate(2px, -2px) skew(5deg);
                opacity: 0.6;
            }
            40% {
                transform: translate(-2px, 2px) skew(-5deg);
                opacity: 0.8;
            }
            60% {
                transform: translate(2px, 2px) skew(5deg);
                opacity: 0.6;
            }
            80% {
                transform: translate(-2px, -2px) skew(-5deg);
                opacity: 0.8;
            }
            100% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
        }

        @keyframes glitch-anim-3 {
            0% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
            20% {
                transform: translate(-2px, 2px) skew(-5deg);
                opacity: 0.6;
            }
            40% {
                transform: translate(2px, -2px) skew(5deg);
                opacity: 0.8;
            }
            60% {
                transform: translate(-2px, -2px) skew(-5deg);
                opacity: 0.6;
            }
            80% {
                transform: translate(2px, 2px) skew(5deg);
                opacity: 0.8;
            }
            100% {
                transform: translate(0, 0) skew(0deg);
                opacity: 0.8;
            }
        }
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


        #contact {
            display: flex;
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons horizontally */
            justify-content: center; /* Center buttons vertically if needed */
            gap: 10px; /* Space between buttons */
        }

        .linkcontact {
            display: flex;
            align-items: center; /* Center items vertically */
            justify-content: center; /* Center items horizontally */
            background-color: transparent; /* Transparent background */
            color: black; /* Text color */
            text-decoration: none;
            font-size: 20px;
            width: 200px; /* Set a fixed width for all buttons */
            padding: 10px; /* Add padding around content */
            border: 1px solid black; /* Border color */
            border-radius: 25px; /* Rounded pill shape */
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-sizing: border-box; /* Ensure padding and border are included in the width */
            overflow: hidden; /* Prevent content overflow */
        }

        .linkcontact img {
            width: 24px; /* Adjust the image size as needed */
            height: 24px; /* Adjust the image size as needed */
            margin-right: 8px; /* Space between image and text */
            vertical-align: middle; /* Align image vertically with text */
        }

        .linkcontact span {
            display: inline-flex; /* Align text horizontally with image */
            align-items: center; /* Center text vertically */
            vertical-align: middle; /* Align text vertically with image */
        }

        .linkcontact:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Light background on hover */
            transform: scale(1.1); /* Make the button bigger on hover */
        }


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
                <button id="menuButton"><i class="fas fa-bars"></i></button>
                <div id="navLinks">
                    <a href="#" id="homeLink">Home</a>
                    <a href="#" id="aboutLink">About</a>
                    <a href="#" id="galleryLink">Gallery</a>
                    <a href="#" id="contactLink">Contact</a>
                    <a href="#" id="imageLink">Image</a>
                </div>
            </nav>
        </header>
        <div id="app">
            <section id="home" class="page visible">
                Main Content
            </section>
            <section id="about" class="page hidden">
                About Content
            </section>
            <section id="gallery" class="page hidden">
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
            <section id="contact" class="page hidden">
                <a href="https://discordapp.com/users/369482011896840192" class="linkcontact" target="_blank">
                    <img src="{{URL::asset('img/images/discord.png')}}" alt="Discord Icon" />
                    <span>Discord</span>
                </a>
                <a href="https://www.facebook.com/uicntk" class="linkcontact" target="_blank">
                    <img src="{{URL::asset('img/images/facebook.png')}}" alt="Facebook Icon" />
                    <span>Facebook</span>
                </a>
                <a href="https://x.com/k_yura1907" class="linkcontact" target="_blank">
                    <img src="{{URL::asset('img/images/x.png')}}" alt="X Icon" />
                    <span>X</span>
                </a>
            </section>
            <section id="image" class="page hidden">
                Image Content
            </section>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById('menuButton').addEventListener('click', function() {
                this.classList.toggle('active');
                document.getElementById('navLinks').classList.toggle('active');
            });
            
            const resultTextElement = document.getElementById('result-text');
            const originalText = 'tamayuraaa';
            const replaceText = 'sougetsuui';
            const randomSymbols = '0123456789!@#$%^&*()-+=[]{}|;:,.<>/?';
            const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?/';

            // Helper functions
            function randomChar() {
                return chars.charAt(Math.floor(Math.random() * chars.length));
            }

            function randomizeSubstring(substring) {
                return substring.split('').map(() => {
                    return randomSymbols.charAt(Math.floor(Math.random() * randomSymbols.length));
                }).join('');
            }

            function generateRandomString(length) {
                let result = '';
                for (let i = 0; i < length; i++) {
                    result += randomChar();
                }
                return result;
            }

            function updateText() {
                let iterations = 0;
                const randomInterval = setInterval(() => {
                    resultTextElement.textContent = generateRandomString(originalText.length);

                    setTimeout(() => {
                        resultTextElement.textContent = randomizeSubstring(originalText);
                    }, 300);

                    iterations++;
                    if (iterations >= 10) { // Adjust this number as needed
                        clearInterval(randomInterval);
                        setTimeout(transformText, 100); // Delay before starting the transformation
                    }
                }, 200); // Interval for random text updates
            }

            function transformText() {
                let index = 0;
                const targetLength = Math.min(originalText.length, replaceText.length); // Ensure we don't exceed bounds

                function updateCharacter() {
                    if (index < targetLength) {
                        const currentText = resultTextElement.textContent;
                        let newText = '';
                        for (let i = 0; i < originalText.length; i++) {
                            if (i < index) {
                                newText += replaceText[i];
                            } else if (i === index) {
                                newText += replaceText[i];
                            } else {
                                newText += randomChar(); // Randomize the remaining characters
                            }
                        }
                        resultTextElement.textContent = newText;
                        index++;
                        setTimeout(updateCharacter, 100); // Delay between character updates
                    } else {
                        resultTextElement.textContent = replaceText + generateRandomString(originalText.length - replaceText.length);
                    }
                }
                updateCharacter();
            }

            function randomizePosition(element) {
                if (!element) {
                    console.error('Element not found');
                    return;
                }

                const containerWidth = window.innerWidth;
                const containerHeight = window.innerHeight;
                const textWidth = element.offsetWidth;
                const textHeight = element.offsetHeight;

                const randomX = Math.random() * (containerWidth - textWidth);
                const randomY = Math.random() * (containerHeight - textHeight);

                element.style.position = 'absolute'; // Ensure absolute positioning
                element.style.left = `${randomX}px`;
                element.style.top = `${randomY}px`;
            }

            // Initialize body opacity to 0 for transition effect
            document.body.style.opacity = 0;

            // Start the text update process when the page loads
            window.addEventListener('load', () => {
                console.log('Page loaded. Starting text update and splash screen handling.');

                // Randomize position of the result text element within the container
                randomizePosition(resultTextElement);

                // Hide the header during splash screen
                const header = document.querySelector('header');
                if (header) {
                    header.classList.add('hidden');
                }

                // Start updating text and ensure the body fades in
                updateText();
                document.body.style.opacity = 1;

                // Initially hide the app content
                const app = document.getElementById('app');
                if (app) {
                    app.style.display = 'none'; // Initially hide the app
                    app.style.opacity = '0';    // Ensure it's not visible initially
                }
            });

            // Stop updating and switch to the main content after 5 seconds
            setTimeout(() => {
                console.log('5 seconds elapsed, fading out splash screen and showing main content.');

                // Set the final text for resultTextElement
                resultTextElement.textContent = replaceText;

                const splashScreen = document.getElementById('splash-screen');
                if (splashScreen) {
                    splashScreen.style.transition = 'opacity 0.5s ease-in-out'; // Smooth fade out
                    splashScreen.style.opacity = '0';
                    setTimeout(() => {
                        splashScreen.style.display = 'none'; // Ensure splash screen is hidden

                        // Show the app content
                        const app = document.getElementById('app');
                        if (app) {
                            app.style.display = 'flex'; // Ensure the app is displayed
                            app.style.opacity = '1';    // Make sure the app is visible
                        }

                        // Show the header again
                        const header = document.querySelector('header');
                        if (header) {
                            header.classList.remove('hidden');
                        }
                    }, 500); // Match the fade-out duration
                }
            }, 5000);

            // Page navigation and scrolling handling
            const pages = document.querySelectorAll('.page');
            const navLinks = document.querySelectorAll('nav a');
            let currentPage = 'home';
            let isScrolling = false;

            function updatePage(newPage) {
                // Remove active class from current page and add hidden class
                const currentPageElement = document.getElementById(currentPage);
                if (currentPageElement) {
                    currentPageElement.classList.remove('visible');
                    currentPageElement.classList.add('hidden');
                }

                // Set new page
                const newPageElement = document.getElementById(newPage);
                if (newPageElement) {
                    newPageElement.classList.remove('hidden');
                    newPageElement.classList.add('visible');
                }

                // Update current page
                currentPage = newPage;

                // Update active link
                navLinks.forEach(link => link.classList.remove('active'));
                const activeLink = document.getElementById(`${currentPage}Link`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }

            function handleScroll(event) {
                if (isScrolling) return; // Prevent rapid scrolling
                isScrolling = true;
                setTimeout(() => isScrolling = false, 1000); // Reset after 1 second

                const delta = event.deltaY || event.detail || event.wheelDelta;

                // Determine direction and update page
                if (delta > 0) {
                    // Scroll down
                    const currentIndex = Array.from(pages).indexOf(document.getElementById(currentPage));
                    if (currentIndex < pages.length - 1) {
                        updatePage(pages[currentIndex + 1].id);
                    }
                } else {
                    // Scroll up
                    const currentIndex = Array.from(pages).indexOf(document.getElementById(currentPage));
                    if (currentIndex > 0) {
                        updatePage(pages[currentIndex - 1].id);
                    }
                }
            }

            // Add event listener for vertical scrolling
            window.addEventListener('wheel', handleScroll);

            // Add event listeners to nav links
            navLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetPage = this.id.replace('Link', '').toLowerCase();
                    if (targetPage !== currentPage) {
                        updatePage(targetPage);
                    }
                });
            });

            // Initialize the first page
            updatePage(currentPage);
            
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
        });
    </script>
</body>
</html>
