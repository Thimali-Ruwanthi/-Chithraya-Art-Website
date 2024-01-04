 <?php

include '../components/connect.php';

session_start();

/*$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Uploaded images</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_styles.css">

</head>
<body>
   
<?php include '../components/admin_header.php'; ?>

<section class="accounts">

   <h1 class="heading">Uploaded images</h1>

   <div class="box-container">

   <?php
     $select_image = $conn->prepare("SELECT * FROM `image`"); 
     $select_image->execute();
     if($select_image->rowCount() > 0){
      while($fetch_image = $select_image->fetch(PDO::FETCH_ASSOC)){
   ?>

<div class="box">

<p> name : <span><?= $fetch_image['name']; ?></span></p>
<p> email : <span><?= $fetch_image['email']; ?></span></p>
<p> number : <span><?= $fetch_image['number']; ?></span></p>
<p> details : <span><?= $fetch_image['details']; ?></span></p>
<input type="hidden"   name="image" value="<?= $fetch_image['image_01']; ?>">
<img src="../userupload/<?= $fetch_image['image_01']; ?>" alt="image" width= "80%"   height="80%" object-fit="contain" margin-bottom="1.5rem">
           
</div>

<?php
      }
   }else{
      echo '<p class="empty">you have no messages</p>';
   }
?>

</div>

</section>
      
            
   


   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

            








<script src="../js/admin_script.js"></script>

</body>
</html>   