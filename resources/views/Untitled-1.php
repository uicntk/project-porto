<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
    }

    .swiper {
      width: 100%;
      max-width: 1500px; /* Adjust as needed */
      height: 300px; /* Adjust as needed */
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
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensure images cover the slide area */
    }
    /* Blur effect for non-active slides */
    .swiper-slide:not(.swiper-slide-active) {
      filter: blur(2px); /* Adjust the blur amount as needed */
      opacity: 0.4; /* Optional: Adjust the opacity for better effect */
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1217669316032466984/IMG_0302.png?ex=66c4076c&is=66c2b5ec&hm=8c71959beb66482f41dfe02d9fc67f0f614ae374cb70a3976f90f5d55798f016&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1218096555878518814/1_1_Code_Xs.png?ex=66c39b12&is=66c24992&hm=657a05a15faea637e48ae9e4e35fa88b6aaae04639991c094ef57a4f0417141d&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/644001371867316241/1158603597332885514/FPRn8-9aMAA_l6c.png?ex=66c40aaf&is=66c2b92f&hm=e7b0a13aed67248149aa57847f4360076b37bc8e85d0759b176e856a20951790&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1230863201751666760/image.png?ex=66c3e86f&is=66c296ef&hm=595d1a3e3a1580755e7ae6022211c4a26b5d3da9cef7282ab32a64fdb4ff3735&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1259071111103250442/FAMKuN9UYAAg7dj.jpg?ex=66c3b219&is=66c26099&hm=8012637c01a73aead43da31adc7552d6cf508b5bdd05cc4183dbc9d5a2e69f00&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1270316076445728798/GDfNNeQWAAA2wRA.png?ex=66c3bc49&is=66c26ac9&hm=207877a7a1e1ea1becfb08f9a5366c8386529c99946031df366b6250b1c81e87&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1271288204909350982/image0.jpg?ex=66c3f9e7&is=66c2a867&hm=502b113a93fe5ab7dd06338f7ab4b27f1b5efa6fc1fa9f72589e84e4c2ad1196&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/598372008128020500/1272642623898652817/Illustration107s.png?ex=66c3a14e&is=66c24fce&hm=a48b88d82e1c2e98e55898f53f41fe9e1fb0a5b0153f4b6e51a77d7696f6a6a0&" />
      </div>
      <div class="swiper-slide">
        <img src="https://cdn.discordapp.com/attachments/558498337649590282/949564757671825408/FND15ChUUAMbiPu.png?ex=66c398d8&is=66c24758&hm=f43cff34ff42a570d5af5c3dd11dbd934faea344440ea218165f7b5202a0a0dd&" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
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
  </script>
</body>

</html>
