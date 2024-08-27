<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery with Navigation</title>
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
            width: 1200px; /* Width to show exactly 3 images */
            overflow: hidden; /* Hide overflowed content */
        }
        .gallery {
            display: flex;
            transition: none; /* No transition needed since we're not sliding */
        }
        .image-container {
            width: 400px; /* Width of each image */
            height: 700px; /* Height of each image */
            margin-right: 20px; /* Space between images */
            flex-shrink: 0; /* Prevent images from shrinking */
            transition: opacity 0.5s ease, filter 0.5s ease;
            position: relative;
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
        .focused {
            opacity: 1;
            filter: none;
            z-index: 1;
        }
        .blurred {
            opacity: 0.5;
            filter: blur(5px);
            z-index: 0;
        }
        .nav-button {
            position: absolute;
            top: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 20px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 20px;
            z-index: 2;
            transform: translateY(-50%);
        }
        .nav-button.left {
            left: 10px;
        }
        .nav-button.right {
            right: 10px;
        }
        @media (max-width: 768px) {
            .slider-container {
                width: 400px; /* Adjust width for mobile */
                height: 600px;
            }
            .image-container {
                height: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="gallery">
            <div class="image-container">
                <img src="http://127.0.0.1:8000/assets/img/images/6.jfif" alt="Image 1">
                <div class="image-title">Title 1</div>
            </div>
            <div class="image-container">
                <img src="http://127.0.0.1:8000/assets/img/images/5.jfif" alt="Image 2" id="myImg">
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
            const gallery = document.querySelector('.gallery');
            const slides = Array.from(gallery.children);
            let currentIndex = Math.floor(slides.length / 2); // Start with the middle image

            function updateFocus() {
                slides.forEach((slide, index) => {
                    if (index === currentIndex) { // Center image
                        slide.classList.add('focused');
                        slide.classList.remove('blurred');
                    } else {
                        slide.classList.remove('focused');
                        slide.classList.add('blurred');
                    }
                });
            }

            function moveSlide(direction) {
                currentIndex = (currentIndex + direction + slides.length) % slides.length;
                updateFocus();
            }

            // Attach event listeners to buttons
            document.querySelector('.nav-button.left').addEventListener('click', () => moveSlide(-1));
            document.querySelector('.nav-button.right').addEventListener('click', () => moveSlide(1));

            // Initialize gallery focus
            updateFocus();
        });
    </script>
</body>
</html>
