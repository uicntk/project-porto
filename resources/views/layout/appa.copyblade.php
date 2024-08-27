<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider Gallery</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .slider-container {
            position: relative;
            width: 1200px; /* Width to show 3 images with spacing */
            height: 800px;
            overflow: hidden;
        }
        .gallery {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }
        .image-container {
            position: relative;
            width: 400px; /* Width of each image */
            height: 700px; /* Height of each image */
            margin-right: 20px; /* Space between images */
            flex-shrink: 0; /* Prevent images from shrinking */
            transition: opacity 0.5s ease, filter 0.5s ease;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image-title {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }
        .nav-button {
            position: absolute;
            bottom: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 20px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 20px;
            z-index: 2;
        }
        .nav-button.left {
            left: 10px;
            display: none;
        }
        .nav-button.right {
            right: 10px;
        }
        .focused {
            z-index: 1;
            opacity: 1;
            filter: none;
        }
        .blurred {
            opacity: 0.5;
            filter: blur(5px);
            z-index: 0;
        }
        @media (max-width: 768px) {
            .slider-container {
                position: relative;
                width: 400px; /* Width to show 3 images with spacing */
                height: 600px;
                overflow: hidden;
            }
            .image-title {
                position: absolute;
                bottom: 20px;
            }
            .image-container {
                position: relative;
                width: 400px; /* Width of each image */
                height: 500px; /* Height of each image */
                margin-right: 20px; /* Space between images */
                flex-shrink: 0; /* Prevent images from shrinking */
                transition: opacity 0.5s ease, filter 0.5s ease;
            }
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="gallery">
            <!-- Original images -->
            <div class="image-container">
                <img src="http://127.0.0.1:8000/assets/img/images/6.jfif" alt="Image 1">
                <div class="image-title">Title 1</div>
            </div>
            <div class="image-container">
                <img src="http://127.0.0.1:8000/assets/img/images/5.jfif" alt="Image 2">
                <div class="image-title">Title 2</div>
            </div>
            <div class="image-container">
                <img src="http://127.0.0.1:8000/assets/img/images/6.jfif" alt="Image 3">
                <div class="image-title">Title 3</div>
            </div>
        </div>
        <button class="nav-button left">&#10094;</button>
        <button class="nav-button right">&#10095;</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function isMobileDevice() {
                return /Mobi|Android/i.test(navigator.userAgent);
            }

            const initialSlides = isMobileDevice() ? 1 : 3;
            let isTransitioning = false;
            const slideWidth = 400;
            const spaceBetween = 20;
            const transitionDuration = 500;

            const gallery = document.querySelector('.gallery');
            let currentIndex = 0;

            function copyGallery(reverse = false) {
                const slides = Array.from(gallery.children);
                const totalSlides = slides.length;
                const slidesToCopy = reverse ? slides.slice().reverse() : slides;

                slidesToCopy.forEach(slide => {
                    const clonedSlide = slide.cloneNode(true);
                    gallery.appendChild(clonedSlide);
                });
            }

            function updateGalleryWidth() {
                const totalSlides = gallery.children.length;
                gallery.style.width = `${slideWidth * totalSlides + spaceBetween * (totalSlides - 1)}px`;
            }

            function moveSlide(direction) {
                if (isTransitioning) return;

                isTransitioning = true;

                const slides = Array.from(gallery.children);
                const totalSlides = slides.length;
                const maxIndex = totalSlides - initialSlides;

                if (direction === 1) {
                    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
                } else {
                    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
                    if (currentIndex < 0) {
                        currentIndex = totalSlides - initialSlides;
                    }
                }

                const newTransform = -currentIndex * (slideWidth + spaceBetween);
                gallery.style.transition = `transform ${transitionDuration}ms ease-in-out`;
                gallery.style.transform = `translateX(${newTransform}px)`;

                if (currentIndex === 0 || currentIndex === maxIndex) {
                    setTimeout(() => {
                        gallery.style.transition = 'none';
                        gallery.style.transform = `translateX(${-currentIndex * (slideWidth + spaceBetween)}px)`;
                        
                        if (direction === 1) {
                            copyGallery();
                        } else {
                            copyGallery(true);
                        }
                        
                        updateGalleryWidth();
                        setTimeout(() => {
                            gallery.style.transition = `transform ${transitionDuration}ms ease-in-out`;
                            isTransitioning = false;
                        }, 50);
                    }, transitionDuration);
                } else {
                    setTimeout(() => {
                        isTransitioning = false;
                    }, transitionDuration);
                }

                updateFocus();
            }

            function updateFocus() {
                const slides = Array.from(gallery.children);
                const centerIndex = Math.floor(initialSlides / 2);
                slides.forEach((slide, index) => {
                    if (index >= currentIndex && index < currentIndex + initialSlides) {
                        if (index === currentIndex + centerIndex) {
                            slide.classList.add('focused');
                            slide.classList.remove('blurred');
                        } else {
                            slide.classList.remove('focused');
                            slide.classList.add('blurred');
                        }
                    } else {
                        slide.classList.remove('focused');
                        slide.classList.add('blurred');
                    }
                });
            }

            function initializeSlider() {
                copyGallery();
                updateGalleryWidth();
                updateFocus();
            }

            initializeSlider();

            // Attach event listeners to buttons
            document.querySelector('.nav-button.left').addEventListener('click', () => moveSlide(-1));
            document.querySelector('.nav-button.right').addEventListener('click', () => moveSlide(1));
        });
    </script>
</body>
</html>
