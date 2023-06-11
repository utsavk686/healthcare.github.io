<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbeque Nation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <section class="sub-header">
     
      <nav>
        <a class="cen" href="index.html"> <img src="logo.png" alt="" ></a>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">contact</a></li>
           <li> <a href="#"><input type="search" placeholder="search here">
                <span class="fa fa-search"></span></a></li>
            
        </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Contact Us</h1>
    </section>


    <!----------------------------------  CONTACT US --------------------------------------->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.759231407215!2d76.80333211480504!3d30.725168381639744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed21ac20da79%3A0xbe56a1812c7d4c04!2sBarbeque%20Nation%20-%20Chandigarh%20-%20Sector%2026!5e0!3m2!1sen!2sin!4v1625280537821!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    

    <section class="contact-us">
<div class="row">
    <div class="contact-col">
        <div>
            <i class="fa fa-home"></i>
            <span>
              <h5> SCO 39, Madhya Marg, Block 2, Sector 26,</h5>
                  <p>near Green Market, Chowk, Chandigarh, 160019</p>
            </span>
        </div>
    
    <div>
        <i class="fa fa-phone"></i>
        <span>
          <h5> +9523645687</h5>
          <p>Mon - Fri: 08:00 am - 10:00 pm</p>
          <p>Sat - Sun: 10:00 am - 11:00 pm</p>
        </span>
    </div>
    <div>
        <i class="fa fa-envelope-open-text"></i>
        <span>
          <h5>feedback@barbequenation.com</h5>
          <p>Email us your query</p>
          
        </span>
    </div>
</div>

<!------------------------------- CONTACT FORM--------------------------------------->
    <div class="contact-col">
    
 <form action="myphp.php" method="POST" >
     
  <input type="text" name="name"  placeholder="Enter your name" required>
    
  
  <input type="email" name="email" placeholder="Enter your email" required>
   
    
  <input type="text" name="mobile"  placeholder="Enter your mobile number" required>

  <textarea  rows="8" name="query" placeholder="Enter Your Query" required></textarea> 
    
        <button type="submit" class="hero-btn red-btn">Send message</button>
</form>
    </div>
</div>
    </section>

    
            
            <!------------------Footer-------------->
            <section class="footer">
              <h4>About Us</h4>
              
              <div clas><img src="logo.png" alt="">
                <p> Madhya Marg, Block 2, Sector 26 <br> near Green Market, Chowk, Chandigarh, 160019</p>
                <i class="fas fa-phone"></i>
                <p class="reser">Reservation Number:6203411387 <br> Working Hours.</p>
                <p> MON- FRI: 08:00 AM - 10:00 PM <br> SAT - SUN: 10:00 AM - 11:00 PM</p>
              </div>

              <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
              </div>
              <p>Made With <i class="far fa-heart"></i> by Barbeque Nation</p>

            </section>
           
<!----------------------------------- JAVASCRIPT FOR NAVIGATION BAR ------------------------->
            <script>
            var navLinks = document.getElementById("navLinks")

              function showMenu(){
              navLinks.style.right = "0";
              }

              function hideMenu(){
                navLinks.style.right = "-200px";
              }
            
            </script>
            </body>
            </html>