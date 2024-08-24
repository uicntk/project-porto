document.addEventListener('DOMContentLoaded', async () => {
    // Track page load time
    let pageLoadStartTime = Date.now();

    // Function to simulate asynchronous processing
    async function processJs1(transformationDuration) {
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
                    setTimeout(() => transformText(transformationDuration), 100); // Delay before starting the transformation
                }
            }, 200); // Interval for random text updates
        }

        function transformText(duration) {
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
                    setTimeout(updateCharacter, duration / targetLength); // Adjust delay between character updates based on duration
                } else {
                    resultTextElement.textContent = replaceText + generateRandomString(originalText.length - replaceText.length);
                    // Transition to main content after animation
                    setTimeout(showMainContent, 1000); // Ensure this delay matches the desired total duration
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
            const mainContent = document.getElementById('main-content');
            
            splashScreen.classList.add('hidden'); // Add hidden class to fade out splash screen

            // Wait for fade out to complete before showing main content
            setTimeout(() => {
                mainContent.style.display = 'block'; // Show main content
                mainContent.classList.add('visible'); // Add visible class to fade in main content
            }, 1000); // Ensure this matches the duration of the splash screen fade-out
        }

        console.log('Processing phase 1 (js1)...');

        // Simulate some async work with a delay
        await new Promise(resolve => setTimeout(resolve, 5000));

        console.log('Phase 1 done.');
    }

    // Function to simulate loading the second script
    async function loadJs2() {
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
