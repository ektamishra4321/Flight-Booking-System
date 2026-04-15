<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  
  animation-duration: 15s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  

}
</style>
</head>
<body> 
<body>
<style>
.topnav {
  overflow: hidden;
  background-color:#00008B;
  height:100px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #00FFFF;
  color: white;
}
</style>
<div class="topnav">
  <a class="active" href="home.html">Home</a>
  <a href="schedule.php">Flight time table</a>
  <a href="epayment.php">Payment and offers</a>
  <a href="first_page.php">Baggage</a>
  <a href="AH Locations.php">Airport and hotel locations</a>
  <a href="contact.php">Contact us</a>
  <a href="signup.php">Sign Up</a>
  <a href="index.php">Login</a>
  
</div>
</body>

<style>
body {
  background-color: black;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow 
{
  from {
    text-shadow: 0 0 10px black, 0 0 20px black, 0 0 30px black, 0 0 40px black, 0 0 50px black, 0 0 60px black, 0 0 70px black;
  }
  
  to {
    text-shadow: 0 0 20px blue, 0 0 30px blue, 0 0 40px blue, 0 0 50px blue, 0 0 60px blue, 0 0 70px blue, 0 0 80px blue;
  }
}
</style>
</head>
<body>

<h1 class="glow">AEROFLY AIRLINES</h1>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="city1.webp" style="width:100%"> 
  <div class="text">Aerofly Airlines</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="city2.jpg" style="width:100%">
  <div class="text">Get all help to get you started</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="city3.jpg" style="width:100%">
  <div class="text"> We ensure a safe journey</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<style>
  * {
    box-sizing:border-box;
  }
  
  body {
    color:red;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .container {
    padding: 64px;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both
  }
  
  .column-66 {
    float: left;
    width: 66.66666%;
   
  }
  
  .column-33 {
    float: left;
    width: 33.33333%;
    
  }
  
  .large-font {
    font-size: 48px;
  }
  
  .xlarge-font {
    font-size: 64px;
    color:#00008B;
  }
  
  .button {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    background-color: #04AA6D;
  }
  
  img {
    display: block;
    height: auto;
    max-width: 400%;
    max-height: 1500%;
  }
  
  @media screen and (max-width: 1000px) {
    .column-66,
    .column-33 {
      width: 100%;
      text-align: center;
    }
    img {
      margin: auto;
    }
  }
  </style>
  </head>
  <body>
  
  
  <!-- The App Section -->
  <div class="container" style="background-color:#F0FFFF">
  
  <div style="text-align:center">
    <h2><font color="red" size="25"> Experience the Luxury</font></h2>
   </div> 
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>Feedback</b></h1>
        <h1 class="large-font" style="color:red;"><b>Have feedback for us?</b></h1>
         <p> <font color="#00008B"> We value your opinion. Give us your feedback and let us know how you liked our services and travel facilities.</font></p>
  <button class="button" onclick="window.location.href = 'feedback.php';" style="background-color:red">Learn More</button></div>
      <div class="column-33">
          <img src="feedback.jpg" width="400" height="1500">
      </div>
    </div>
  </div>
  
  <!-- Clarity Section -->
  <div class="container" style="background-color:#ADD8E6">
    <div class="row">
      <div class="column-33">
        <img src="travel.jpg" alt="App" width="350" height="1500">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Travel Requirements</b></h1>
        <h1 class="large-font" style="color:red;"><b> Need to know what all to carry?</b></h1>
         <p> <font color="#00008B"> We provide you elaborate information on the travel requirements.</font></p>
  <button class="button" onclick="window.location.href = 'protocols.php';" style="background-color:red">Learn More</button>
      </div>
    </div>
  </div>
  
  <!-- The App Section -->
  <div class="container" style="background-color:#F0FFFF">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>Latest news</b></h1>
        <h1 class="large-font" style="color:red;"><b>What is new ?</b></h1>
         <p> <font color="#00008B"> Click to know more about the latest updates and developments of our airlines.</font></p>
  <button class="button" onclick="window.location.href = 'news.php';"style="background-color:red">Learn More</button>
      </div>
      <div class="column-33">
          <img src="news.jpg" width="400" height="1500" >
      </div>
    </div>
  </div>
  
  
  <!-- Clarity Section -->
  <div class="container" style="background-color:#ADD8E6">
    <div class="row">
      <div class="column-33">
        <img src="services.jpg" alt="App" width="350" height="1500">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b> Our services</b></h1>
        <h1 class="large-font" style="color:red;"><b>WHY US?</b></h1>
         <p> <font color="#00008B"> Know about the various services our airlines offer.</font></p>
  <button class="button" onclick="window.location.href = 'services.php';" style="background-color:red">Learn More</button>
      </div>
    </div>
  </div>
  
  <!-- The App Section -->
  <div class="container" style="background-color:#F0FFFF">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>FAQ's</b></h1>
        <h1 class="large-font" style="color:red;"><b>Have more questions?</b></h1>
         <p> <font color="#00008B">We have answers to all the common questions asked.</font></p>
  <button class="button" onclick="window.location.href = 'faq.php';"style="background-color:red">Learn More</button>
      </div>
      <div class="column-33">
          <img src="h.faq.png" width="400" height="1500" >
      </div>
    </div>
  </div>
  </div>
  </body>
  <head>
    <!-- Design by foolishdeveloper.com -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style media="screen">
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  * {
    box-sizing:border-box;
  }
  body{
      background: black;
      font-family: sans-serif;
  }
  footer{
      position: absolute;
      top:3100px;
      bottom: 0;
      left: 0;
      right: 0;
      background:black;
      height: auto;
      width: 100vw;
  
      padding-top: 40px;
      color: #fff;
  }
  .footer-content{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
       background-color:black;
  }
  .footer-content h3{
      font-size: 2.1rem;
      font-weight: 500;
      text-transform: capitalize;
      line-height: 3rem;
      background-color:black;
  }
  .footer-content p{
      max-width: 500px;
      margin: 10px auto;
      line-height: 28px;
      font-size: 14px;
      color: #cacdd2;
       background-color:black;
  }
  .socials{
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1rem 0 3rem 0;
      background-color:black;
  }
  .socials li{
      margin: 0 10px;
  }
  .socials a{
      text-decoration: none;
      color: #fff;
      border: 1.1px solid white;
      padding: 5px;
  
      border-radius: 50%;
  
  }
  .socials a i{
      font-size: 1.1rem;
      width: 20px;
  
  
      transition: color .4s ease;
  
  }
  .socials a:hover i{
      color: aqua;
  }
  
  .footer-bottom{
      background: #000;
      width: 100vw;
      padding: 20px;
  padding-bottom: 40px;
      text-align: center;
      background-color:black;
  }
  .footer-bottom p{
  float: left;
      font-size: 14px;
      word-spacing: 2px;
      text-transform: capitalize;
      background-color:black;
  }
  .footer-bottom p a{
    color:#44bae8;
    font-size: 16px;
    text-decoration: none;
     background-color:black;
  }
  .footer-bottom span{
      text-transform: uppercase;
      opacity: .4;
      font-weight: 200;
     background-color:black;
  }
  .footer-menu{
    float: right;
   background-color:black;
  
  }
  .footer-menu ul{
    display: flex;
     background-color:black;
  }
  .footer-menu ul li{
  padding-right: 10px;
  display: block;
    background-color:black;
  }
  .footer-menu ul li a{
    color: #cfd2d6;
    text-decoration: none;
    background-color:black;
  }
  .footer-menu ul li a:hover{
    color: #27bcda;
  }
        
  @media (max-width:500px) {
  .footer-menu ul{
    display: flex;
    margin-top: 10px;
    margin-bottom: 20px;
    background-color:black;
  }
  }
      </style>
  </head>
  <body>
      <footer>
          <div class="footer-content">
              <h3><a href="about.php">About US</a></li>
              <p>Know more about us and connect with us through our social media accounts.</p>
              <ul class="socials">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>
          </div>
          <div class="footer-bottom">
              
                      <div class="footer-menu">
                        <ul class="f-menu">
                          <li><a href="home_log.php">Home</a></li>
                          <li><a href="">Privacy</a></li>
                          <li><a href="">Terms and conditions</a></li>
                          </ul>
                      </div>
          </div>
  
      </footer>

  
</body>
</html> 
