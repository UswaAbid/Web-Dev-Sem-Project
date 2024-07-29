<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>


     <!-- swiper css link (javascript library) -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

     <!-- font awesome cdn link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

     <!-- custom css file link -->
  <link rel="stylesheet" href="style.css">

     <!-- boxicon css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
     
<!-- login section starts -->

<div class="body">
   <div class="wrapper">
        <form action="login_form.php" method="post" class="login-form">
            <h1>login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="username" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">remember me</label>
                <a href="#">forgot password?</a>
            </div>
            
            <input type="submit" value="login" class="btn" name="submit">

            <div class="register-link">
                <p>don't have an account?
                <a href="#">register</a></p>
            </div>
        </form>
   </div>

</div> 

       

<!-- login section ends -->

    
     <!-- swiper js link (javascript library) -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     <!-- custom js file link -->
     <script src="script.js"></script>
</body>
</html>