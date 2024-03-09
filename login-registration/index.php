<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--FONT-AWESOME-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

     <!--MAIN CSS-->
     <link rel="stylesheet" href="style4myweb.css">
     <title>My Personal Website</title>
</head> 
<body>
  <!--HEADER DESIGN-->
  <header class="header">
    <div class="logo-container">
        <a href="#" class="logo">Website</a>
    </div>

    <div class="menu-toggle">
        <i class="fas fa-bars" id="menu-icon"></i>
    </div>
    
    <nav class="navbar">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#services" class="nav-link">Services</a>
        <a href="#portfolio" class="nav-link">Portfolio</a>
        <a href="#contact" class="nav-link">Contact</a>
        <a href="login.php" class="nav-link">Login</a> 
    </nav>
</header>

<!--HOME SECTION DESIGN-->
<section class="home" id="home">
       <div class="home-content">
        <h3>Welcome To My Website</h3>
        <h1>I am Maine Cedric</h1>
        <h3>And I'm an <span class="multiple-text"> </span></h3>
        <p>Jack Of All Trades.</p>
        <div class="social-media">
          <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a>
          <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>

         </div>
         <a href="cebee.pdf" class="btn" target="_blank">Download CV</a>
       </div>

       <div class="home-img">
        <img src="ako.png" alt="">
       </div>
</section>

<!--ABOUT SECTION DESIGN-->
<section class="about" id="about">
  <div class="about-img">
    <img src="formal.png" alt="">
  </div>

  <div class="about-content">
    <h2 class="heading"> ABOUT <span>ME</span></h2>
    <h3> Soon to be Web Developer</h3>
    <p>I'm Maine Cedric Tabirao. I am 19 years old and am a college student at National University Fairview. In the future, I hope to become a cybersecurity professional. I enjoy playing Basketball and PC games such as Call of Duty Mobile, Wildrift, and others. </p>
    <a href="#" class="btn">Read more</a>
  </div>
</section>

<!--SERVICES SECTION DESIGN-->
<section class="services" id="services">
  <h2 class="heading"> My <span>Services</span></h2>

  <div class="services-container">
    <div class="services-box">
      <i class="fa-solid fa-code"></i>
      <h3>Web Development</h3>
      <p>Interested? Check my VC</p>
      <a href="#" class="btn">Read More</a>
    </div>

    <div class="services-box">
      <i class="fa-solid fa-palette"></i>
      <h3>UI/UX Designing</h3>
      <p>Interested? Check my VC</p>
      <a href="#" class="btn">Read More</a>
    </div>

    <div class="services-box">
      <i class="fa-brands fa-android"></i>
      <h3>App Development</h3>
      <p>Interested? Check my VC</p>
      <a href="#" class="btn">Read More</a>
    </div>
  </div>
</section>

<!--PORTFOLIO SECTION DESIGN-->
<section class="porfolio" id="porfolio">
  <h2 class="heading">Latest<span> Projects</span></h2>

  <div class="porfolio-container">
    <div class="porfolio-box">
      <img src="work.png" alt="">
      <div class="porfolio-layer">
      <h4>Web Development</h4>
      <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
      <i class="fa-solid fa-up-right-from-square"></i>
    </div>
  </div>

  <div class="porfolio-box">
    <img src="coding.png" alt="">
    <div class="porfolio-layer">
    <h4>Web Development</h4>
    <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
    <i class="fa-solid fa-up-right-from-square"></i>
  </div>
</div>

<div class="porfolio-box">
  <img src="pc.png" alt="">
  <div class="porfolio-layer">
  <h4>Web Design</h4>
  <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
  <i class="fa-solid fa-up-right-from-square"></i>
 </div>
</div>

<div class="porfolio-box">
  <img src="whisk.png" alt="">
  <div class="porfolio-layer">
  <h4>App Design</h4>
  <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
  <i class="fa-solid fa-up-right-from-square"></i>
 </div>
</div>

<div class="porfolio-box">
  <img src="eme.png" alt="">
  <div class="porfolio-layer">
  <h4>Web Design</h4>
  <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
  <i class="fa-solid fa-up-right-from-square"></i>
 </div>
</div>

<div class="porfolio-box">
  <img src="design.png" alt="">
  <div class="porfolio-layer">
  <h4>Web Design</h4>
  <p>If the customer is very smart, he or she we will be able to achieve the desired result.</p>
  <i class="fa-solid fa-up-right-from-square"></i>
 </div>
</div>
</section>

<!--CONTACT SECTION DESIGN-->
<section class="contact" id="contact">
  <h2 class="heading">Contact <span>Me</span></h2>

  <form action="#">
    <div class="input-box">
      <input type="text" placeholder="Full Name">
      <input type="email" placeholder="Email Address">
    </div>

    <div class="input-box">
      <input type="number" placeholder="Mobile Number">
      <input type="text" placeholder="Email Subject">
    </div>

    <div class="input-box">
      <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
    </div>
    <input type="submit" value="Send Message" class="btn">
  </form>
</section>

<!-- FOOTER DESIGN-->
<footer class="footer">
  <div class="footer-text">
    <p>Copyright &copy; | All Rights Reserved.</p>
  </div>

  <div class="footer-iconTop">
    <a href="#home"><i class="fas fa-angle-up"></i></a>
  </div>
</footer>

<!-- SCROLL REVEAL JS -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- TYPED JS -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- MAIN JS -->
<script src="main.js"></script>
</body>
</html>
