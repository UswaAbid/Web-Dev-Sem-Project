<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

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


     
      <div class="heading" style="background: url('images/book.jpg') no-repeat;">
         <h1>book now</h1>

     </div>

     <!-- Booking section starts  -->

       <section class="booking">
             <h1 class="heading-title">book your trip with us</h1>

             <form action="book_form.php" method="post" class="book-form">

                     <div class="flex">
                         <div class="inputBox">
                            <span>name :</span>
                            <input type="text" placeholder="Enter your full name" name="name" required>
                         </div>
                         <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="Enter your active email" name="email" required>
                         </div>
                         <div class="inputBox">
                            <span>phone :</span>
                            <input type="number" placeholder="Enter your contact number" name="phone" required>
                         </div>
                         <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="Enter your full address" name="address" required>
                         </div>
                         <div class="inputBox">
                            <span>where to travel:</span>
                            <input type="text" placeholder="Enter a place name you wanna visit" name="location" required>
                         </div>
                         <div class="inputBox">
                            <span>no. of guests :</span>
                            <input type="number" placeholder="Enter in numbers" name="guests"required>
                         </div>
                         <div class="inputBox">
                            <span>arrival schedule :</span>
                            <input type="date" name="arrival"required>
                         </div>
                         <div class="inputBox">
                            <span>departure schedule :</span>
                            <input type="date"name="departure"required>
                         </div>
                     </div>
                       
                     <input type="submit" value="submit" class="btn" name="send">

             </form>
       </section>




     <!-- Booking section ends  -->

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
</body>
</html>