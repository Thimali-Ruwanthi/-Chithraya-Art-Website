<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
 }else{
    $user_id = '';
    header('location:user_login.php');
 };



if(isset($_POST['upload_product'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);

   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = 'userupload/'.$image_01;

 


   $select_image = $conn->prepare("SELECT * FROM `image` WHERE name = ?");
   $select_image->execute([$name]);

   if($select_image->rowCount() > 0){
      $message[] = 'name already exist!';
   }else{

      $insert_image = $conn->prepare("INSERT INTO `image`(name, email, number, details, image_01) VALUES(?,?,?,?,?)");
      $insert_image->execute([$name, $email, $number, $details, $image_01]);

      if($insert_image){
         if($image_size_01 > 2000000){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            
            $message[] = 'upload successfully!';
         }

      }

   }  

};




if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_product_image = $conn->prepare("SELECT * FROM `image` WHERE id = ?");
   $delete_product_image->execute([$delete_id]);
   $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
   unlink('userupload/'.$fetch_delete_image['image_01']);

   $delete_product = $conn->prepare("DELETE FROM `image` WHERE id = ?");
   $delete_product->execute([$delete_id]);



   header('location:customize.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/custom_style.css">
   <link rel="stylesheet" href="css/styles.css">
   
<style>
   .add-products form{
    max-width: 50rem;
    margin: 0 auto;   
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
    padding:2rem;
 }
 
 .add-products form .flex{
    display: flex;
    gap:1.5rem;
    flex-wrap: wrap;
 }

 .sec{
  padding: 10px 5%;
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

.body{
   font-family: 'Roboto', sans-serif;
}

</style>



</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="add-products">

   <h1 class="heading">Customaize your Art</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Your name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="enter name" name="name">
         </div>
         <div class="inputBox">
            <span>Your email (required)</span>
            <input type="text"  class="box" required maxlength="100" placeholder="enter email"  name="email">
         </div>

         <div class="inputBox">
            <span>Phone number (required)</span>
            <input type="text"  class="box" required maxlength="12" placeholder="enter phone number"  name="number">
         </div>

        <div class="inputBox">
            <span>Image 01 (required)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        
        
         <div class="inputBox">
            <span>Detailed description and Address(required)</span>
            <textarea name="details" placeholder="enter how you want" class="box"  cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="upload product" class="btn" name="upload_product">
   </form>

</section>



<section class= "sec">
<h1 class="heading">Our Customaized Arts</h1>
  <div class="products">
    
    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/70.png">
        <img src="photos/image/70.png" alt=""></a></div>
      
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/102.jpg"> 
      <img src="photos/image/102.jpg" alt=""></a></div>
      
      
      <div class="desc">watercolor 02</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/104.jpg">
      <img src="photos/image/104.jpg" alt=""></a></div>
      
      
      <div class="desc">watercolor 03</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/129.jpg">
      <img src="photos/image/129.jpg" alt=""></a></div>
      
      
      <div class="desc">watercolor 04</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/dd(1).jpg"> 
      <img src="photos/image/dd(1).jpg" alt=""></a></div>
     
      
      <div class="desc">watercolor 05</div>
    </div>

    <div class="card">
      <div class="img">
      <a target="_blank" href="photos/image/21.png">
      <img src="photos/image/21.png" alt=""></a></div>
      
      
      <div class="desc">watercolor 06</div>
    </div>



    </div>

</div>
</section>















<!--
<section class="show-products">

   <h1 class="heading">products upload</h1>

   <div class="box-container">

   <?php
      $select_image = $conn->prepare("SELECT * FROM `image`");
      $select_image->execute();
      if($select_image->rowCount() > 0){
         while($fetch_image = $select_image->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="userupload/<?= $fetch_image['image_01']; ?>" alt="">
      <div class="name">   <?= $fetch_image['name']; ?></div>
      <div class="email"><?= $fetch_image['email']; ?></div>
      <div class="number"><?= $fetch_image['number']; ?></div>
      <div class="details"><span><?= $fetch_image['details']; ?></span></div>
      <div class="flex-btn">
       
         <a href="customize.php?delete=<?= $fetch_image['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>
   
   </div>

</section>
   -->






<?php include 'components/footer.php'; ?>
<script src="../js/admin_script.js"></script>
   
</body>
</html>