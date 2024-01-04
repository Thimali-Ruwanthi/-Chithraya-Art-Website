<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>3d art gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
  *{
      margin: 0;
      padding: 0;
  }
   
    body {
      
      height: 100%;
    
      background: black;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      display:flex;
      justify-content: center;
      align-items: center;
      min-height:100vh;

      
    }

    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 70px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 400px;
      height: 400px;
	  -webkit-box-reflect:below 1px linear-gradient(transparent,transparent,#0006);
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="photos/image/FrameArt_20231014016549571.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/100.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/101.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/102.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/103.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/104.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/105.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/106.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="photos/image/107.jpg" />
      </div>
	   <div class="swiper-slide">
        <img src="photos/image/108.jpg" />
      </div>
	   <div class="swiper-slide">
        <img src="photos/image/109.jpg" />
      </div>
	   <div class="swiper-slide">
        <img src="photos/image/110.jpg" />
      </div>
	   <div class="swiper-slide">
        <img src="photos/image/111.jpg" />
      </div>
	   <div class="swiper-slide">
        <img src="photos/image/112.jpg" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
	  autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
     
    });
  </script>
</body>

</html>