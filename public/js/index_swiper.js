
            
      
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        centeredSlides: true,
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