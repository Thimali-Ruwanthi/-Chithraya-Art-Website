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
   <title>potrait</title>

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
      <a target="_blank" href="photos/image/FrameArt_20231012135145383.jpg">
        <img src="photos/image/FrameArt_20231012135145383.jpg" alt=""></a></div>
      
      <div class="title">Dancing Women</div>
      <div class="desc">illustrator 01</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/19.png"> 
      <img src="photos/image/19.png" alt=""></a></div>
      
      <div class="title">Tamil Women</div>
      <div class="desc">illustrator 02</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/FrameArt_2023103023543841.jpg">
      <img src="photos/image/FrameArt_2023103023543841.jpg" alt=""></a></div>
      
      <div class="title">Lotus lake</div>
      <div class="desc">illustrator 03</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/48.jpg"> 
      <img src="photos/image/48.jpg" alt=""></a></div>
      
      <div class="title">Children Life</div>
      <div class="desc">illustrator 04</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/86.jpg">
      <img src="photos/image/86.jpg" alt=""></a></div>
      
      <div class="title">Fishermans</div>
      <div class="desc">illustrator 05</div>
    </div>

    
    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/FrameArt_2023101619145644.jpg">
      <img src="photos/image/FrameArt_2023101619145644.jpg" alt=""></a></div>
    
      <div class="title">Evening sunset</div>
      <div class="desc">illustrator 06</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/FrameArt_20231030235553690.jpg"> 
      <img src="photos/image/FrameArt_20231030235553690.jpg" alt=""></a></div>
     
      <div class="title">Couple Dance</div>
      <div class="desc">illustrator 07</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/FrameArt_20231016191351262.jpg">
      <img src="photos/image/FrameArt_20231016191351262.jpg" alt=""></a></div>
      
      <div class="title">Wall art</div>
      <div class="desc">illustrator 08</div>
    </div>









  </div>

</div>
</section>























</body>
</html>