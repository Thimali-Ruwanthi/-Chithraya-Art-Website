<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">


   <style>
   .container{
	position:relative;
	width:100%;
	height: 100vh;
	display:flex;
	justify-content: center;
    align-items: center;
	
}

.item{
	width: 100%;
	height:550px;
	max-width: 820px;
	background:#fff;
	border-radius: 20px;
	box-shadow: 0 0 20px 10px rgba(0,0,0,.4);
	overflow: hidden;
	grid-template-columns: repeat(2, 1fr);
	display: grid;
	z-index: 1000;
}

.contact{
	background:#eee;
}

/*
.submit-form{
	background: #dac9b3;
}
*/

.first-text{
   margin-bottom: 1rem;
	padding-left: 20px;
	padding-top: 20px;
	font-size: 1.6rem;
	color:var(--black);
	
}

.image{
	height: 540px;
	width:420px;
}



.second-text{
	font-weight: 500;
	color:#8f50ec;
	padding-left:20px;
   font-size: 20px;
}

h5{
text-align:center;
font-size:15px;
color:  #333;
}


/*contact us*/
.third-text{
	font-size: 25px;
	position: relative;
	top: 20px;
	left:20px;
	padding-top: 10px;
	color: #fff;
	
}

form{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   /*border-radius: .5rem;
   border:var(--border);*/
   max-width: 50rem;
   margin:0 auto;
}

form h3{
   margin-bottom: 1rem;
   text-transform: capitalize;
   font-size: 2.6rem;
   color:var(--black);
}

form .box{
   margin:1rem 0;
   width: 100%;
   background-color: var(--light-bg);
   padding:1.6rem;
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

form textarea{
   height: 15rem;
   resize: none;
}
</style>




</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!--<section class="about">

   <div class="row">

      <div class="image">
         <img src="photos/client.png" alt="">
      </div>

      <div class="contentt">
         <h3 style= "font-family: cursive; color: #811011;" >Why Choose Me?</h3>
         <p><i>Hello to you who has come to visit my home of art. 
            I am an illustrator and artist who is always wanting to learn more. 
            I believe that art is a time machine that can take you through the precious moments in the past and simultaneously throw you into the magnificent dreams of the future. 
            I have studied animation for four years and illustration for another two to deepen my knowledge. 
            i am an artist who has a good understanding of art as well as the mind of the consumer or art lover. I can give expression to your dream. image and idea the way you would want it. 
            If you require fine arts. I have a gallery and I can paint one for you. If you need art I will be the voice of your mind. If you want, I can do wonders for you with specific illustrations to match. In general, I don't just draw or paint. 
            I will draw the way you want.
 You can follow my journey on facebook @chithraya..</i></p>
 <p>-Chalini Dedunu-</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>-->


<div class="container">
<div class="item">
<div class="contact">

<img src="photos/client.png" alt="" class="image">
<div class="social-links">

<br>





</div>
</div>
<div class="submit-form">

<form action="" method="post">
<h3 style= "font-family: cursive; color: #811011;" >Why Choose Me?</h3>
         <p class= "first-text">Hello to you who has come to visit my home of art. 
            I am an illustrator and artist who is always wanting to learn more. 
            I believe that art is a time machine that can take you through the precious moments in the past and simultaneously throw you into the magnificent dreams of the future. 
            I have studied animation for four years and illustration for another two to deepen my knowledge. 
            i am an artist who has a good understanding of art as well as the mind of the consumer or art lover. I can give expression to your dream. image and idea the way you would want it. 
            If you require fine arts. I have a gallery and I can paint one for you. If you need art I will be the voice of your mind. If you want, I can do wonders for you with specific illustrations to match. In general, I don't just draw or paint. 
            I will draw the way you want.
 You can follow my journey on facebook @chithraya..</p>
 <p>-Chalini Dedunu-</p>
         <a href="contact.php" class="btn">contact us</a>
   </form>
</div>
</div>
</div>








 
<h1 class="heading" style= "font-family: cursive;">Hava a look</h1>
<center>

<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FChithraya.lk&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

</center>


<section class="reviews">
   
   <h1 class="heading" style= "font-family: cursive;">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="photos/image/31.jpg" alt="">
         <p>My experience with "chithraya art" and especially dedunu was amazing. 
            I've never purchase art online and dedunu made me feel comfortable, she was professional yet personal, with a strong knowledge of the painting. 
            Delivery was unbelievable, arriving in days and packaged amazingly to assure no possible damage. 
            I will certainly use them again and I've all ready told all by friends about this amazing way to purchase art.</p>
         
         <h3>Yamuna Wijekoon</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="photos/image/32.jpg" alt="">
         <p>Many thanks to dedunu for a beautiful painting that transports me to a happy place.
The painting arrived in great shape and was accompanied by a short handwritten note from the artist wishing me a 
happy birthday. It was a truly joyful moment when I unpacked the painting.
It was also a pleasure to communicate with the very professional, warm and friendly Art Advisor from "Chithraya art". 
Many thanks!</p>
         <h3>Malintha Madugalle</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="photos/image/33.jpg" alt="">
         <p>The work arrived yesterday, in perfect condition - It is magnificent. I was very happy with the product and the service. You have been really helpful throughout the process. 
         Everything about this transaction has been great! Great communication, fast shipping, painting was in perfect condition when it got here.
            The next time I have an empty wall at home, I'll be sure to visit "Chithraya art".</p>
         
         <h3>Ishani Ramanayake</h3>
      </div>


      <div class="swiper-slide slide">
         <img src="photos/image/NIKN2174.jpg" alt="">
         <p>
            I've never purchase art online and dedunu made me feel comfortable, she was professional yet personal, with a strong knowledge of the painting. 
            Delivery was unbelievable, arriving in days and packaged amazingly to assure no possible damage. 
            I will certainly use them again and I've all ready told all by friends about this amazing way to purchase art.</p>
         
         <h3>Kumudu Peries</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="photos/image/NTHYE9867.jpg" alt="">
         <p>
The painting arrived in great shape and was accompanied by a short handwritten note from the artist wishing me a 
happy birthday. It was a truly joyful moment when I unpacked the painting.
It was also a pleasure to communicate with the very professional, warm and friendly Art Advisor from "Chithraya art". 
Many thanks!</p>
         <h3>Samani Kumari</h3>
      </div>

<!--
      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>-->

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>