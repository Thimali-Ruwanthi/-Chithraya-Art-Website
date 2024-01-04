<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);


   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>
   
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
	font-size: 2.6rem;
	color:var(--black);
	
}

.image{
	height: 290px;
	width:320px;
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

<!--
<section class="contact">



   <form action="" method="post">
      <h3>Contact Us With Your Ideas</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your Contact number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>



</section>
-->

<div class="container">
<div class="item">
<div class="contact">
<div class= "first-text"> Let's get in touch</div>
<img src="photos/contactus.png" alt="" class="image">
<div class="social-links">
<span class= "second-text">Connect with us </span>
<br>
<h5>Address: No 248,Palliyamankada, Wadduwa,</h5>
<h5>Email:	chalinidedunu@gmail.com</h5>
<h5>Phone:	+94 761 702 791</h5>




</div>
</div>
<div class="submit-form">

<form action="" method="post">
      <h3>Contact Us <br>and Tell us something</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your Contact number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>
</div>
</div>
</div>










<!-- no 2 
<section class="contact">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>You can Customaize your Artwork</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your Contact number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="comment" class="box" placeholder="how can i help you" cols="30" rows="10"></textarea>
      <input type="file" name="userfile[]" value="" multiple="">
      <input type="submit" value="Upload " name="send" class="btn">
   </form>

</section>
-->

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>





















