<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('img/icon/zero.png')}}" type="image/gif">
    <link href="{{URL::asset('assets/css/randomize.css')}}" rel="stylesheet" type="text/css" />
    <title>Sougetsu Ui</title>
    <style>
        /* General styles */
        body {
            margin: 0;
            padding: 0;
            font-family: monospace;
            overflow: hidden;
        }

        header {
            background: none;
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
            justify-content: flex-start;
            padding: 10px;
            position: relative;
        }

        nav a {
            color: black;
            text-decoration: none;
            font-size: 20px;
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: border-color 0.3s ease, color 0.3s ease;
        }

        .container {
            display: flex;
            flex-direction: row;
            height: 100vh;
            width: 100vw;
            overflow-x: auto;
            overflow-y: hidden;
            background: #fff;
            box-sizing: border-box;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
            align-items: center;
            font-size: 24px;
        }

        .container::-webkit-scrollbar {
            display: none;
        }
        .page {
            flex: 0 0 100vw;
            height: 100vh;
            box-sizing: border-box;
            padding: 20px;
            background: #f4f4f4;
            scroll-snap-align: start;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            background-image: url('{{URL::asset('img/images/6.jfif')}}'); /* Set your background image */
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating the image */
        }

        .page.active {
            opacity: 1;
            display: flex; /* Ensure it's displayed */
        }

        .page.hidden {
            display: none; /* Hide when not active */
        }

        .burger-menu {
            display: none; /* Hide by default, show only in mobile view */
            font-size: 24px;
            background: none;
            border: none;
            color: black;
            cursor: pointer;
            padding: 10px;
            position: fixed; /* Fixed position */
            top: 10px; /* Adjust as needed */
            left: 10px; /* Adjust as needed */
            z-index: 1001; /* Ensure it's above other elements */
        }

        @media (min-width: 769px) {
            #navLinks {
                display: flex;
                position: static;
                background: none;
                box-shadow: none;
            }

            .burger-menu {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Vertical scrolling on mobile */
                overflow-x: hidden; /* Hide horizontal scrolling on mobile */
                overflow-y: auto; /* Enable vertical scrolling on mobile */
                scrollbar-width: auto; /* Show scrollbar for Firefox */
            }

            .page {
                width: 100%; /* Full width for mobile */
                height: auto; /* Height based on content */
                min-height: 100vh; /* Ensure sections cover the viewport height */
                position: static; /* Reset position for mobile */
                opacity: 1; /* No fade effect on mobile */
                transition: none; /* Disable transition on mobile */
                display: flex; /* Ensure display flex for centering content */
                flex-direction: column; /* Stack content vertically */
                align-items: center; /* Center content horizontally */
                justify-content: center; /* Center content vertically */
                margin: 0; /* Remove default margin */
                box-sizing: border-box; /* Ensure padding is included in width */
            }
            #navLinks {
                display: none; /* Hide nav links by default on mobile */
                flex-direction: column;
                width: 100%;
                background: white;
                position: fixed;
                top: 60px; /* Adjust to fit your header height */
                left: 0;
                z-index: 1000;
                padding: 20px 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            #navLinks.show {
                display: flex; /* Show nav links when the menu is active */
            }

            .burger-menu {
                display: block; /* Show burger button on mobile */
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
            <section id="home" class="page active">Home Content</section>
            <section id="about" class="page">About Content</section>
            <section id="gallery" class="page">Gallery Content</section>
            <section id="contact" class="page">Contact Content</section>
            <section id="image" class="page">Image Content</section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
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
                // Transition to main content after animation
                setTimeout(showMainContent, 1000); // Adjust delay as needed
            }
        }
        updateCharacter();
    }

    function showSplashScreen() {
        document.getElementById('splash-screen').style.display = 'flex';
        randomizePosition(resultTextElement); // Randomize position on first load
        updateText(); // Start text animation
    }

    function showMainContent() {
        const splashScreen = document.getElementById('splash-screen');
        splashScreen.classList.add('hidden'); // Add hidden class to fade out splash screen

        // Wait for fade out to complete
        setTimeout(() => {
            console.log('main-content done')
            document.getElementById('main-content').style.display = 'block'; // Show main content
            document.getElementById('main-content').classList.add('visible'); // Add visible class to fade in main content
        }, 1000); // Match this delay with the CSS transition duration
    }

    // Initialize the splash screen
    showSplashScreen();

    // Initialize content switching
    const pages = document.querySelectorAll('.page');
    const navLinksContainer = document.getElementById('navLinks');
    const navLinksElements = navLinksContainer.querySelectorAll('a');
    const container = document.querySelector('.container');
    let currentPage = 'home';
    let isScrolling = false;

    function isMobileDevice() {
        return /Mobi|Android/i.test(navigator.userAgent);
    }

    function updatePage(newPage) {
        const currentPageElement = document.getElementById(currentPage);
        if (currentPageElement) {
            currentPageElement.classList.remove('active');
            if (!isMobileDevice()) {
                currentPageElement.classList.add('hidden'); // Add hidden class in desktop mode
            }
        }

        const newPageElement = document.getElementById(newPage);
        if (newPageElement) {
            newPageElement.classList.remove('hidden'); // Remove hidden class
            newPageElement.classList.add('active');
        }

        currentPage = newPage;

        navLinksElements.forEach(link => link.classList.remove('active'));
        const activeLink = document.getElementById(`${currentPage}Link`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }

    function scrollToSection(section) {
        if (section) {
            if (isMobileDevice()) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                updatePage(section.id);
            } else {
                const index = Array.from(pages).indexOf(section);
                container.scrollLeft = index * window.innerWidth;
                updatePage(section.id);
            }
        }
    }

    function handleScroll(event) {
        if (isMobileDevice()) return;

        if (isScrolling) return;

        isScrolling = true;
        const delta = event.deltaY;
        let newPageIndex = Array.from(pages).indexOf(document.getElementById(currentPage));

        if (delta > 0) {
            newPageIndex = Math.min(newPageIndex + 1, pages.length - 1);
        } else {
            newPageIndex = Math.max(newPageIndex - 1, 0);
        }

        const newPage = pages[newPageIndex].id;
        if (newPage !== currentPage) {
            updatePage(newPage);
            container.scrollLeft = newPageIndex * window.innerWidth;
        }

        setTimeout(() => isScrolling = false, 500);
    }

    function handleMouseDown(e) {
        if (isMobileDevice()) return;

        e.preventDefault();
        let startX = e.pageX - container.offsetLeft;
        let scrollLeft = container.scrollLeft;
        let isDown = true;

        function mouseMove(e) {
            if (isDown) {
                e.preventDefault();
                const x = e.pageX - container.offsetLeft;
                const walkX = (x - startX) * 2;
                container.scrollLeft = scrollLeft - walkX;

                const sectionWidth = container.clientWidth;
                const newPageIndex = Math.floor(container.scrollLeft / sectionWidth);
                if (newPageIndex !== Array.from(pages).indexOf(document.getElementById(currentPage))) {
                    updatePage(pages[newPageIndex].id);
                }
            }
        }

        function mouseUp() {
            isDown = false;
            document.removeEventListener('mousemove', mouseMove);
            document.removeEventListener('mouseup', mouseUp);
        }

        document.addEventListener('mousemove', mouseMove);
        document.addEventListener('mouseup', mouseUp);
    }

    // Handle burger menu toggle
    const burgerMenu = document.getElementById('burgerMenu');
    const navLinks = document.getElementById('navLinks');

    burgerMenu.addEventListener('click', () => {
        navLinks.classList.toggle('show');
        if (navLinks.classList.contains('show')) {
            // Disable scrolling when menu is open
            document.body.style.overflow = 'hidden';
        } else {
            // Re-enable scrolling when menu is closed
            document.body.style.overflow = 'auto';
        }
    });

    window.addEventListener('wheel', handleScroll, { passive: false });
    navLinksElements.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetPage = this.id.replace('Link', '').toLowerCase();
            const targetSection = document.getElementById(targetPage);
            if (targetSection) {
                scrollToSection(targetSection);
            }
        });
    });

    container.addEventListener('mousedown', handleMouseDown);
});

    </script>
</body>
</html>
