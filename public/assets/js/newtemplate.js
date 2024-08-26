document.addEventListener('DOMContentLoaded', async () => {

    // Function to simulate asynchronous processing
    async function processJs1(transformationDuration) {
        const resultTextElement = document.getElementById('result-text');
        const container = document.getElementById('splash-screen');
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
        
        function randomizePosition(element, container) {
            if (!element) {
                console.error('Element not found');
                return;
            }

            // Ensure the container has a position relative or absolute
            const containerStyle = window.getComputedStyle(container);
            if (containerStyle.position === 'static') {
                container.style.position = 'relative';
            }
        
            const containerWidth = window.innerWidth;
            const containerHeight = window.innerHeight;

            const randomW = Math.floor(Math.random() * (containerWidth/2));
            const randomH = Math.floor(Math.random() * (containerHeight/2));
    
        
            element.style.position = 'absolute'; // Ensure absolute positioning
            element.style.left = `${randomW}px`;
            element.style.top = `${randomH}px`;
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
            randomizePosition(resultTextElement, container); // Randomize position on first load
            updateText(); // Start text animation
        }
        
        function showMainContent() {
            const splashScreen = document.getElementById('splash-screen');
            const mainContent = document.getElementById('main-content');
            
            splashScreen.classList.add('hidden'); // Add hidden class to fade out splash screen
        
            // Wait for fade out to complete before showing main content
            setTimeout(() => {
                mainContent.style.display = 'block'; // Show main content
                mainContent.classList.add('visible'); // Add visible class to fade in main content
            }, 1000); // Ensure this matches the duration of the splash screen fade-out
        }
        
        // Initialize the splash screen
        showSplashScreen();

        console.log('Processing phase 1 (js1)...');

        // Simulate some async work with a delay
        await new Promise(resolve => setTimeout(resolve, 5000));

        console.log('Phase 1 done.');
    }

    // Function to simulate loading the second script
    async function loadJs2() {
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
                    // Add a delay before scrolling on mobile devices
                    setTimeout(() => {
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        updatePage(section.id);
                    }, 500); // 1-second delay
                } else {
                    const index = Array.from(pages).indexOf(section);
                    container.scrollLeft = index * window.innerWidth;
                    updatePage(section.id);
                }
            }
        }
    
        function handleScroll(event) {
            if (isMobileDevice() || isScrolling) return;
    
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
    
        const burgerMenu = document.getElementById('burgerMenu');
        const navLinks = document.getElementById('navLinks');
        const header = document.querySelector('header'); // Select the header element
        const navLinkElements = navLinks.querySelectorAll('a'); // Select all nav links
    
        // Function to handle opening and closing the menu
        function toggleMenu() {
            if (navLinks.classList.contains('show')) {
                // Start fade-out effect
                navLinks.classList.add('hide');
                // Wait for the fade-out transition to complete before removing the show class
                setTimeout(() => {
                    navLinks.classList.remove('show');
                    burgerMenu.style.left = '20px'; // Move back to left corner
                    header.classList.remove('header-bg'); // Remove white background from header
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                }, 500); // Duration of fade-out transition
            } else {
                // Open menu
                navLinks.classList.remove('hide');
                navLinks.classList.add('show');
                burgerMenu.style.left = 'calc(100% - 60px)'; // Move to right corner
                header.classList.add('header-bg'); // Add white background to header
                document.body.style.overflow = 'hidden'; // Disable scrolling
            }
        }
    
        // Toggle menu visibility on burger menu click
        burgerMenu.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                toggleMenu();
            }
        });
    
        // Close menu and scroll to section when a nav link is clicked
        navLinkElements.forEach(link => {
            link.addEventListener('click', function(event) {
                if (window.innerWidth <= 768) {
                    event.preventDefault(); // Prevent the default anchor behavior
                    const targetPage = this.id.replace('Link', '').toLowerCase();
                    const targetSection = document.getElementById(targetPage);
                    if (targetSection) {
                        // Start fade-out effect
                        navLinks.classList.add('hide');
                        setTimeout(() => {
                            navLinks.classList.remove('show');
                            burgerMenu.style.left = '20px'; // Move back to left corner
                            header.classList.remove('header-bg'); // Remove white background from header
                            document.body.style.overflow = 'auto'; // Re-enable scrolling
                            scrollToSection(targetSection);
                        }, 500); // Duration of fade-out transition
                    }
                } else {
                    event.preventDefault();
                    const targetPage = this.id.replace('Link', '').toLowerCase();
                    const targetSection = document.getElementById(targetPage);
                    if (targetSection) {
                        scrollToSection(targetSection);
                    }
                }
            });
        });
    
        window.addEventListener('wheel', handleScroll, { passive: false });
        container.addEventListener('mousedown', handleMouseDown);
        
        
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
            loop: false, // Enable infinite loop
            autoplay: {
                delay: 3000, // Delay in milliseconds (3 seconds)
                disableOnInteraction: false, // Continue autoplay after user interactions
            }
        });
        swiper.update();

        var slider = new Swiper(".slider", {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
            observer: true,
            observeParents: true,
            centerInsufficientSlides: true,
            centeredSlidesBounds	: true,
            loop: true, // Enable infinite loop
          });
        slider.update();
        
        console.log('Loading phase 2 (js2)...');

        // Simulate some async work with a delay
        await new Promise(resolve => setTimeout(resolve, 1000));

        console.log('Phase 2 loaded.');
    }

    // Main function to coordinate the execution
    async function main() {
        try {
            // Pass the page load duration as the duration for text transformation
            await processJs1();
            await loadJs2();
            await console.log('Every Page has been loaded.')
        } catch (error) {
            console.error('An error occurred:', error);
        }
    }

    // Start the main function
    main();
});
