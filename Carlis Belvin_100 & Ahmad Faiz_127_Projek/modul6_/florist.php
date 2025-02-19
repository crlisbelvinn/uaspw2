<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
    header ("location:login1.php");
  }
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florist Webssite</title>
    <link href="florist.css?version=<?php echo filemtime('florist.css'); ?>" rel="stylesheet">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">belle florist</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#colection">colection</a>
            <a href="#about">about</a>
            <a href="#shop"><a href="shop.php">shop</a></a>
            <a href="#contact">contact</a>
            <a href="#customer"><a href="customer.php">customer </a></a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>Make Them Smile</h3>
            <p>Lets its beauty accompany you every moment</p>
        </div>
    </section>

    <section class="colection" id="colection">

        <h1 class="heading"> <span>our colection</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="imageuts/bukett.jpg" alt="">
                <h3>Costum Bouqet</h3>
                <p>Flower|Wedding|Money|Snack|etc</p>
            </div>
    
            <div class="box">
                <img src="imageuts/gifts.jpg" alt="">
                <h3>Gifts</h3>
                <p>Graduate|Birtday|etc</p>
               
            </div>
    
            <div class="box">
                <img src="imageuts/dec.jpg">
                <h3>Decoration</h3>
                <p>Standing flower|Flower Board|</p>
              
            </div>
    
            <div class="box">
                <img src="imageuts/plants.jpg" alt="">
                <h3>Home & Living</h3>
                 <p>plants</p>
               
            </div>
    
        </div>
    
    </section>
    
    <section class="about" id="about">

        <h1 class="heading"> <span>about us</span> </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="imageuts/IMG_20221126_023504.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>why chose us</h3>
                <p>We have been delivering flowers and gifts for over 5 years and have vast experience in organizing.</p>
                <p>We help people spread love through our handcrafted flower arrangments, plants and curated gifts.</p>
            </div>
    
        </div>
    
    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> </h1>
    
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7964.060219076642!2d98.66070212092256!3d3.5805569895775116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131d4acd2f10b%3A0x1ca7508ce52afd80!2sPetisah%20Hulu%2C%20Kec.%20Medan%20Baru%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1669742561641!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
           
            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>
    
        </div>
    
    </section>

    <section class="footer">

        <div class="box-container">
     
           <div class="box">
              <i class="fas fa-envelope"></i>
              <h3>email</h3>
              <p>bellvinn@gmail.com</p>
            
           </div>
     
           <div class="box">
              <i class="fas fa-clock"></i>
              <h3>opening hours</h3>
              <p>07:00am to 09:00pm</p>
           </div>
     
           <div class="box">
              <i class="fas fa-map-marker-alt"></i>
              <h3>shop location</h3>
              <p>Petisah Hulu, Medan</p>
           </div>
     
           <div class="box">
              <i class="fas fa-phone"></i>
              <h3>our number</h3>
              <p>082360775525</p>
           </div>
     
        </div>
     
        <div class="credit"> &copy; copyright @ 2022 by <span>Carlis Belvin Waruwu-100</span> | UTS Pemograman Web! </div>
     
     </section>
</body>
</html>