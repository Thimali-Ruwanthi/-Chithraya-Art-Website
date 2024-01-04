<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="css/styles.css">
   

   <style>
p {
  border: 1px solid black; 
  padding: 35px;
  font-size:16px;
  line-height: 1.5;
  background-color: white; 
  font-family:cursive;

}

h1{
   font-family: cursive;
}


</style>



</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">



         <div class="image">
            <img src="photos/image/FrameArt_202311711734675.jpg" alt="">

         </div>
        
     </div>



     <section>
     <h1 class="heading" >Welcome To My Art Gallery</h1>
 <p>Painting is not just a hobby; for some people, it acts as a therapy, whereas for others, it is a full-fledged profession. This is one such activity that relaxes your mind, body, and soul, and gives you complete freedom to express yourself in your own way. 
   Painting something using any medium, be it oil, acrylic, watercolors, poster colors, batik, or even pastels or crayons, can transport you to a different place in your mind. The fine art of watercolor painting has seen its share of transitions.
    It is loved by some people and not so loved by others, but it still remains popular. The following paragraphs provide more information about this art form.
Dedunu is a versatile artist, painter, illustrator, cartoonist with unique ability to be the colour and the shade that you want  to be. Dedunu  whose diehard passion for art made perfectionists in their own right. 
And the resultant combination is an artist who has a keen insight into art as well as the minds of the consumer or the art lover. How would her talent benefit you ? Dedunu can give expression to your dream. image and idea the way you would want it. 
If you require fine arts you can give expression to your dream. 
Dedunu has a gallery of them or she can paint one for you. If you want, a caricature, Dedunu will be your mind's voice. If you want, particular illustrations that would fit into, let us say your new book, Dedunu can do wonders for you. All in all, Dedunu will not just draw or paint. She will draw and paint what you want the way want it.</p>

</section>










<!--
<section class="product">
   <h2 class="product-category">best selling</h2>
   <button class="pre-btn"><img src="photos/back-arrow.png" alt=""></button>
   <button class="pre-btn"><img src="photos/forward-button.png" alt=""></button>
   <div class= "product-container">
      <div class="product-card">
         <div class= "product-image">
            <span></span>
            <img src="photos/17.jpg" alt="" class="product-thumb">
            <button class="card-btn">add to whishlist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p>gvyubibhbgvgvunjhjbj</p>
         </div>
      </div>
   </div>
</section>-->













<!--
<section class= "products">
<h1 class="heading"> products category</h1>
<div class= "all-products" style="display: flex;
   align-items: center;
   justify-content: center;
   flex-wrap: wrap;">
   <div class="card" style="overflow: hidden;
   text-align: center;
   width: 240px;
   height: 340px;
   padding: 2rem;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   border-radius: 1.2rem;
   margin: 2rem">
   <img src="photos/4.png" alt="" >
   <div class= "content"></div>
</div>

<div class="card" style="overflow: hidden;
   text-align: center;
   width: 240px;
   height: 340px;
   padding: 2rem;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   border-radius: 1.2rem;
   margin: 2rem">
   <img src="photos/image/16.png" alt="" >
   <div class= "content"></div>
</div>

<div class="card" style="overflow: hidden;
   text-align: center;
   width: 240px;
   height: 340px;
   padding: 2rem;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   border-radius: 1.2rem;
   margin: 2rem">
   <img src="photos/image/17.jpg" alt="" >
   <div class= "content"></div>
</div>

<div class="card" style="overflow: hidden;
   text-align: center;
   width: 240px;
   height: 340px;
   padding: 2rem;
   display: flex;
   flex-direction: column;align-items: center;
   justify-content: center;
   border-radius: 1.2rem;
   margin: 2rem">
   <img src="photos/image/1.jpg" alt="" >
   <div class= "content"></div>
</div>

</div>

</section>-->












<section class="category">

   <h1 class="heading">Art by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="potrait.php?category=potrait" class="swiper-slide slide">
      <img src="photos/image/333.jpg" alt="">
      <h3>Potrait</h3>
   </a>

   <a href="watercolor.php?category=Watercolor" class="swiper-slide slide">
      <img src="photos/image/102.jpg" alt="">
      <h3>Watercolor</h3>
   </a>

   <a href="traditional.php?category=Traditional" class="swiper-slide slide">
      <img src="photos/image/21.png" alt="">
      <h3>Traditional</h3>
   </a>

   <a href="illustraitor.php?category=illustrator" class="swiper-slide slide">
      <img src="photos/image/23.png" alt="">
      <h3>Illustrator</h3>
   </a>

</div>
</div>

 <!--  </div>

   <div class="swiper-pagination"></div>

   </div>-->

</section>










<div class="main">

 <!--cards -->

 <!--

<div class="card">

<div class="image">
<a href="category.php?category=laptop" >
   <img src="photos/image/5.jpg">
</div>
<div class="title">
 <h1>
Write title Here</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
<button>Read More...</button>
</div>
</div>
















</div>

 -->



<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <!--heart not working-->
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="vxv">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>































<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      /*1024: {
        slidesPerView: 5,
      },*/
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>