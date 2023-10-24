<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"At HAMSAFAR, we are more than just a travel company; we are your partners in crafting unforgettable journeys. With a passion for exploration and a commitment to exceptional service, our team of travel enthusiasts is dedicated to curating unique experiences that cater to your every desire. Whether you're seeking an adventurous escapade or a tranquil getaway, we're here to turn your travel dreams into reality. Explore the world with confidence, knowing that you have a trusted ally in HAMSAFAR."</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>"I was absolutely thrilled with the travel agency's services! From the seamless booking process to the well-planned itinerary, every detail was meticulously handled, making my trip an unforgettable adventure. Thank you for turning my dream vacation into a reality!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Atharv Gorade</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>"I had an amazing experience with this travel agency! Their attention to detail and personalized itineraries made my trip unforgettable.From the moment I inquired about my trip to the very last detail of my journey. I highly recommend their services to fellow travelers."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Atharva Divkar</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>"I was thoroughly impressed with the exceptional service provided by HAMSAFAR. From the moment I inquired about my trip to the very last detail of my journey, they went above and beyond to ensure a seamless and memorable experience. I can't wait to plan my next adventure with them!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mantham Bukam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>Overall, my experience with Humsafar has been nothing short of fantastic. The website's seamless navigation, comprehensive database, and reliable customer support have undoubtedly made it my go-to platform for all my future road trip planning needs. I highly recommend Humsafar to fellow travelers seeking a hassle-free and enjoyable journey from start to finish.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nidhi Gaikar</h3>
      </div>

      

   </div>

</section>

<section class="authors">

   <h1 class="title">Gallery</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3> -->
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>