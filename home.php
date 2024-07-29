<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link (javascript library) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

     <!-- custom css file link -->
      <link rel="stylesheet" href="style.css">

     
</head>
<body>
    
     <!-- header section start -->
      <section class="header">
        
       <a href="home.php" class="logo">travel.</a>

       <nav class="navbar">

       <a href="home.php">home</a>
       <a href="about.php">about</a>
       <a href="package.php">package</a>
       <a href="book.php">book</a>
       <a href="login.php">login</a>

       </nav>

       <div id="menu-btn" class="fas fa-bars"></div>

      </section>
      <!-- header section ends -->

      <!-- home section starts -->

<section class="home">

   <div class="swiper home-slider">

       <div class="swiper-wrapper">

       <div class="swiper-slide slide" style="background-image: url('images/slide-1.jpg');background-size: cover;
                            background-attachment: scroll; background-position: center; height:77rem; width:100%;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
              </div>

              <div class="swiper-slide slide" style="background-image: url('images/slide-2.jpg');background-size: cover;
                            background-attachment: scroll; background-position: center; height:77rem; width:100%;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
              </div>

              <div class="swiper-slide slide" style="background-image: url('images/slide-3.jpg'); background-size: cover;
                            background-attachment: scroll; background-position: center; height:77rem; width:100%;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
              </div>
       </div>

       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
</div>
</section>


      <!-- home section ends -->

      <!-- sevices section starts -->

       <section class="services">

         <h1 class="heading-title">our services</h1>

         <div class="box-container">

             <div class="box">
                    <img class="icon" src="images/icon-1.png" alt="">
                    <br><h3>adventure</h3>
             </div>

             <div class="box">
                    <img class="icon"  src="images/icon-2.png" alt="">
                    <br><h3>tour guide</h3>
             </div>

             <div class="box">
                    <img class="icon"  src="images/icon-3.png" alt="">
                    <br><h3>trekking</h3>
             </div>

             <div class="box">
                    <img class="icon" src="images/icon-4.png" alt="">
                    <br><h3>camp fire</h3>
             </div>

             <div class="box">
                    <img class="icon"  src="images/icon-5.png" alt="">
                    <br><h3>off road</h3>
             </div>

             <div class="box">
                    <img class="icon"  src="images/icon-6.png" alt="">
                    <br><h3>camping</h3>
             </div>



         </div>

       </section>

      <!-- sevices section ends -->

       <!-- home about section starts -->

        <section class="home-about">
              <div class="image"> 
              </div>

              <div class="content">
                   <h3>about us</h3>
                   <p>We are a passionate team of travel enthusiasts with a mission to empower you to explore the world with confidence. Whether you're a seasoned adventurer or a first-time traveler, we believe everyone deserves to experience the magic of travel. Our website provides a wealth of information and resources, from comprehensive destination guides to curated itineraries, all crafted with responsible tourism and cultural sensitivity in mind. Browse our website for inspiration & connect with our travel advisors for personalized recommendations, travel tips, exclusive deals, & destination insights delivered straight to your inbox. Let's make your next journey extraordinary!</p>
                   <a href="about.php" class="btn">read more</a>
               </div>
        </section>

     <!-- home about section starts -->

      <!-- home packages section start -->

         <section class="home-packages">
             <h1 class="heading-title">our packages</h1>
                <div class="box-container">

                    <div class="box">
                         <div class="image">
                              <div class="img"  style="background-image:url('images/card-1.jpg');"></div>
                         </div>
                         <div class="content">
                              <h3>Enchanting Taj Mahal</h3>
                              <p> The magnificent white marble mausoleum, the Taj Mahal, is a timeless monument to devotion.</p>
                              <a href="book.php" class="btn">book now</a>
                         </div>
                    </div>

                    <div class="box">
                         <div class="image">
                              <div class="img"  style="background-image:url('images/card-2.jpg');"></div>
                         </div>
                         <div class="content">
                              <h3>Mountain Adventure</h3>
                              <p> Lush mountains and open fields beckon for exploration and adventure.</p>
                              <a href="book.php" class="btn">book now</a>
                         </div>
                    </div>

                    <div class="box">
                         <div class="image">
                              <div class="img"  style="background-image:url('images/card-3.jpg');"></div>
                         </div>
                         <div class="content">
                              <h3>Hidden Beach Charm</h3>
                              <p>Palm trees sway on a sandy beach, inviting relaxation under tropical skies.</p>
                              <a href="book.php" class="btn">book now</a>
                         </div>
                    </div>
                </div>

                <div class="load-more">
                    <a href="package.php" class="btn">load more</a>
                </div>
         </section>
      
     <!-- home packages section end -->

     <!-- home offer section starts -->

          <section class="home-offer">
               <div class="content">
                    <h3>upto 50% off</h3>
                    <p>Pack your bags and explore the world for less! For a limited time, enjoy savings of up to 50% off on unforgettable travel experiences. Find your dream vacation destination and book your trip today to seize these incredible deals. Don't miss out-explore, discover, and save!</p>
                    <a href="book.php" class="btn">book now</a>
               </div>
          </section>


      <!-- home offer section ends -->

      <!-- footer section starts -->
        
      <section class="footer">

        <div class="box-container">

        <div class="box">
          <h3>Quick Links</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>Extra Links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
          <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use</a>
          </div>

          <div class="box">
          <h3>Contact Info</h3>
          <a href="#"> <i class="fas fa-phone"></i>+123-456-7890 </a>
          <a href="#"> <i class="fas fa-phone"></i>+111-222-3333 </a>
          <a href="#"> <i class="fas fa-envelope"></i>travel.@gmail.com </a>
          <a href="#"> <i class="fas fa-map"></i>Islamabad, Pakistan - 400104 </a>
          </div>

          <div class="box">
          <h3>Follow Us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i>Linkedin </a>
          </div>

        </div>
           
           <div class="credit">Created By <span>Ms. Uswa Abid</span> | All Rights Reserved! </div>

      </section>

      <!-- footer section ends -->


     <!-- swiper js link (javascript library) -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
       
     <!-- custom js file link -->
     <script src="script.js"></script>

     <!-- links -->
    

</body>
</html>