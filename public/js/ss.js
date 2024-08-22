
document.addEventListener('DOMContentLoaded', function() {
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
    });swiper.update();

});