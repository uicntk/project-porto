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
        /* Basic Reset */
html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow-x: hidden; /* Prevent horizontal scroll */
    touch-action: manipulation; /* Ensure touch-action is not blocking scrolling */
}

body {
    font-family: monospace;
    color: #000000;
    transition: opacity 0.5s ease-in-out; /* Smooth transition for opacity */
    opacity: 0; /* Start with body hidden */

    margin: 0;
    overflow-x: hidden; /* Hide horizontal overflow */
}

/* Ensure content can scroll on mobile devices */
@media (max-width: 768px) {
    body {
        overflow-x: scroll; /* Ensure vertical scroll on mobile */
    }
}

header {
    background: transparent; /* Transparent background */
    color: black;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0; /* Align to the top left corner */
    width: 100%;
    display: flex;
    justify-content: space-between; /* Space between burger button and nav */
    align-items: center;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: add shadow for better visibility */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

nav {
    display: flex;
    align-items: center;
    width: 100%;
}

nav a {
    color: black;
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
    color: black;
    font-size: 24px; /* Adjust size as needed */
    cursor: pointer;
}

#navLinks {
    display: flex;
}

#navLinks a {
    padding: 10px;
}

#navLinks.active {
    display: flex; /* Show links when menu button is active */
}

@media (max-width: 768px) {
    header {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background on mobile */
        flex-direction: column; /* Stack items vertically on mobile */
        align-items: flex-start; /* Align items to the start on mobile */
    }

    #navLinks {
        display: none; /* Hide links by default on small screens */
        flex-direction: column;
        width: 100%;
        background-color: #333; /* Ensure the dropdown has a background color */
        position: absolute;
        top: 60px; /* Adjust based on button height */
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

/* Splash Screen Styles */
#splash-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #fff; /* Splash screen background color */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure splash screen is on top */
    transition: opacity 0.5s ease-in-out; /* Smooth fade transition */
}

#splash-screen.hidden {
    opacity: 0;
    display: none;
}

#splash-screen-content {
    font-size: 24px;
    color: #333;
}

/* App Styles */
#app {
    display: flex; /* Show the app content initially */
    opacity: 0;    /* Ensure it's not visible initially */
    transition: opacity 0.5s ease-in-out; /* Smooth transition for opacity */
    position: relative;
    height: auto; /* Allow content height to be dynamic */
    width: 100vw; /* Full viewport width */

    display: flex;
    flex-direction: row; /* Horizontal layout for desktop */
    overflow-x: auto; /* Allow horizontal scroll if necessary */
    height: 100vh; /* Full viewport height */

}

.page {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #333;
    background-color: #f0f0f0; /* Page background color */
    width: 100vw; /* Full viewport width */
    height: auto; /* Adjust height to fit content */
    min-height: 100vh; /* Ensure at least full viewport height */
    flex: 0 0 100vw; /* Each section takes full width of viewport */
    height: 100vh; /* Full viewport height */
    overflow-x: auto; /* Allow horizontal scroll */
    overflow-y: hidden; /* Prevent vertical scroll */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling for iOS devices */
}
/* Mobile styles */
@media (max-width: 768px) {
    #app {
        flex-direction: column; /* Vertical layout for mobile */
        overflow-y: auto; /* Allow vertical scroll */
        overflow-x: hidden; /* Hide horizontal overflow */
    }

    .page {
        flex: 0 0 100vh; /* Each section takes full height of viewport */
        width: 100vw; /* Full width of viewport */
    }
}

.hidden {
    display: none; /* Hide elements with this class */
}


    </style>
</head>
<body>
    <div id="splash-screen">
        <div class="result" style="font-size: 50px;" id="result-text">Transforming...</div>
    </div>
    
    <div id="main-content">
        <header>
            <button id="menuButton"><i class="fas fa-bars"></i></button>
            <nav>
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
                Gallery Content
            </section>
            <section id="contact" class="page hidden">
                Contact Content
            </section>
            <section id="image" class="page hidden">
                Image Content
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function() {
    // Toggle menu button for mobile
    document.getElementById('menuButton').addEventListener('click', function() {
        this.classList.toggle('active');
        document.getElementById('navLinks').classList.toggle('active');
    });
    // Smooth scrolling for all devices
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
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

        setTimeout(() => {
            // Hide splash screen after 5 seconds
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
        
    });
});

    </script>
</body>
</html>
