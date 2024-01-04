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
   <title>traditional</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

<style>

.sec{
  padding: 20px 5%;
}

.products{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
}
.products .card{
  width: 310px;
  /*box-shadow: 0 10px 20px rgba(0,0,0,0.3);*/
  border-radius: 5px;
  padding: 5px;
  margin-bottom: 20px;
  background-color: var(--white);
}


.products .card img{
  height: 300px;
  width:100%
}

.products .card .desc{
  padding: 5px 20px;
  opacity:0;
}

.products .card .title{
  font-weight: 900;
  font-size: 20px;
 
  padding:0 20px;
}

.products .card ..box{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}




</style>
</head>
<body>



</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class= "sec">
  <div class="products">
    
    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/16.jpg">
        <img src="photos/image/16.jpg" alt=""></a></div>
      
      <div class="title">Pahatharata Art</div>
      <div class="desc">traditional 01</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/21.png"> 
      <img src="photos/image/21.png" alt=""></a></div>
      
      <div class="title">Kandyan Art 01</div>
      <div class="desc">traditional 02</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/IMG_E3809.jpg">
      <img src="photos/image/IMG_E3809.jpg" alt=""></a></div>
     
      <div class="title">Kandyan Art 02</div>
      <div class="desc">traditional 03</div>
    </div>

    












  </div>

</div>
</section>























</body>
</html>