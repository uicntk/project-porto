document.addEventListener('DOMContentLoaded', () => {
    const pages = document.querySelectorAll('.page');
    const navLinksContainer = document.getElementById('navLinks');
    const navLinks = navLinksContainer.querySelectorAll('a'); // Select links within the container
    const container = document.querySelector('.container');
    let currentPage = 'home';
    let isScrolling = false;

    // Determine if the user is on a mobile device
    function isMobileDevice() {
        return /Mobi|Android/i.test(navigator.userAgent);
    }

    // Update the visibility of pages
    function updatePage(newPage) {
        const currentPageElement = document.getElementById(currentPage);
        if (currentPageElement) {
            currentPageElement.classList.remove('visible');
            currentPageElement.classList.add('hidden');
        }

        const newPageElement = document.getElementById(newPage);
        if (newPageElement) {
            newPageElement.classList.remove('hidden');
            newPageElement.classList.add('visible');
            if (!isMobileDevice()) {
                newPageElement.classList.add('active');
            }
        } else {
            console.error(`Element with id "${newPage}" not found.`);
        }

        currentPage = newPage;

        navLinks.forEach(link => link.classList.remove('active'));
        const activeLink = document.getElementById(`${currentPage}Link`);
        if (activeLink) {
            activeLink.classList.add('active');
        } else {
            console.error(`Navigation link with id "${currentPage}Link" not found.`);
        }
        console.log(activeLink)
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
        console.log(newPage);

        setTimeout(() => isScrolling = false, 500);
    }

    function scrollToSection(section) {
        if (section) {
            if (isMobileDevice()) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                const index = Array.from(pages).indexOf(section);
                container.scrollLeft = index * window.innerWidth;
                updatePage(section.id);
            }
        } else {
            console.error('Section not found.');
        }
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

    updatePage(currentPage);

    window.addEventListener('wheel', handleScroll, { passive: false });
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetPage = this.id.replace('Link', '').toLowerCase();
            const targetSection = document.getElementById(targetPage);
            if (targetSection) {
                scrollToSection(targetSection);
            } else {
                console.error(`Target section with id "${targetPage}" not found.`);
            }
        });
    });

    container.addEventListener('mousedown', handleMouseDown);
    const burgerMenu = document.getElementById('burgerMenu');
    const navLinkss = document.getElementById('navLinks');

    burgerMenu.addEventListener('click', () => {
        if (navLinkss.classList.contains('show')) {
            navLinkss.classList.remove('show');
        } else {
            navLinkss.classList.add('show');
        }
    });
});
