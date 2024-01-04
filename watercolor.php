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
   <title>watercolor</title>

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
      <a target="_blank" href="photos/image/101.jpg">
        <img src="photos/image/101.jpg" alt=""></a></div>
      
      <div class="title">Visiting to temple</div>
      <div class="desc">watercolor 01</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/102.jpg"> 
      <img src="photos/image/102.jpg" alt=""></a></div>
      
      <div class="title">Bathing with a water paddle</div>
      <div class="desc">watercolor 02</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/103.jpg">
      <img src="photos/image/103.jpg" alt=""></a></div>
      
      <div class="title">Stone Workplace</div>
      <div class="desc">watercolor 03</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/104.jpg">
      <img src="photos/image/104.jpg" alt=""></a></div>
      
      <div class="title">wedding frame</div>
      <div class="desc">watercolor 04</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/105.jpg"> 
      <img src="photos/image/105.jpg" alt=""></a></div>
     
      <div class="title">Making vesak lantern</div>
      <div class="desc">watercolor 05</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/106.jpg">
      <img src="photos/image/106.jpg" alt=""></a></div>
      
      <div class="title">ferry ride</div>
      <div class="desc">watercolor 06</div>
    </div>


  <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/107.jpg">
        <img src="photos/image/107.jpg" alt=""></a></div>
      
      <div class="title">The fishermen</div>
      <div class="desc">watercolor 07</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/108.jpg"> 
      <img src="photos/image/108.jpg" alt=""></a></div>
      
      <div class="title">Eating "Abula"</div>
      <div class="desc">watercolor 08</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/109.jpg">  
      <img src="photos/image/109.jpg" alt=""></a></div>
      
      <div class="title">Having dinner at paddy field</div>
      <div class="desc">watercolor 09</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/110.jpg">
      <img src="photos/image/110.jpg" alt=""></a></div>
      
      <div class="title">Accident</div>
      <div class="desc">watercolor 10</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/111.jpg"> 
      <img src="photos/image/111.jpg" alt=""></a></div>
      
      <div class="title">"Kirikoraha" dance</div>
      <div class="desc">watercolor 11</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/112.jpg">
      <img src="photos/image/112.jpg" alt=""></a></div>
      
      <div class="title">Sri Lankan devil dance</div>
      <div class="desc">watercolor 12</div>
    </div>


    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/113.jpg"> 
      <img src="photos/image/113.jpg" alt=""></a></div>
      
      <div class="title">Trip</div>
      <div class="desc">watercolor 13</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/114.jpg">  
      <img src="photos/image/114.jpg" alt=""></a></div>
      
      <div class="title">Children Life</div>
      <div class="desc">watercolor 14</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/115.jpg">
      <img src="photos/image/115.jpg" alt=""></a></div>
      
      <div class="title">Threshing floor</div>
      <div class="desc">watercolor 15</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/116.jpg"> 
      <img src="photos/image/116.jpg" alt=""></a></div>
      
      <div class="title">The village Grocery store</div>
      <div class="desc">watercolor 16</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/117.jpg">
      <img src="photos/image/117.jpg" alt=""></a></div>
      
      <div class="title">Bathing in the lake</div>
      <div class="desc">watercolor 17</div>
    </div>








  </div>

</div>
</section>

<!--<div class="gallery">
  <a target="_blank" href="photos/3.jpg">
    <img src="photos/3.jpg" alt="Cinque Terre" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/12.jpg">
    <img src="photos/12.jpg" alt="Forest" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/4.png">
    <img src="photos/4.png" alt="Northern Lights" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/6.png">
    <img src="photos/6.png" alt="Mountains" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/7.png">
    <img src="photos/7.png" alt="Cinque Terre" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/8.png">
    <img src="photos/8.png" alt="Forest" >
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="photos/9.jpg">
    <img src="photos/9.jpg" alt="Northern Lights" >
  </a>
 
</div>

<div class="gallery">
  <a target="_blank" href="photos/10.png">
    <img src="photos/10.png" alt="Mountains" >
  </a>
  
</div>


-->





















</body>
</html>