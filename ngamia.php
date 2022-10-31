<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 20px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a. {
  background-color: #04AA6D;
  color: white;
}
.navbar-right {
  float: right;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.sticky + .slideshow-container {
  padding-top: 100px;
}


.mySlides {display: none;}
img {vertical-align: middle;
}

.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
  max-height: 10;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 8px;
  width: 100%;
  text-align: center;
}


.active {
  background-color: #717171;
}
.zoom {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 5s;
  animation-name: zoom;
  animation-duration: 5s;
}
@-webkit-keyframes zoom  {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes zoom {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
*{
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 50px;
  height: 300px; /* Should be removed. Only for demonstration */
}
.row:after {
  content: "";
  display: table;
  clear: both;
  }
  .column {
  float: left;
  width: 50%;
  padding: 50px;
  height: 500px; /* Should be removed. Only for demonstration */
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 50px;
  height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}



/* Footer */
.footer {
  width: 1500px;
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}



</style>
</head>
<body>
<h>camel milk</h>


<div id="navbar">
  <a href="http://localhost/CAMEL_PROJECT/card.php">Shop</a>
    <a href="#">Education</a>
   <a href="#">Health</a>
    <a href="#">Blog</a>
  <div class="navbar-right">
    <a href="http://localhost/CAMEL_PROJECT/login.php">LOGIN</a>

    <a href="http://localhost/CAMEL_PROJECT/prodct.php">CART</a>
  </div>
</div>


<div class="content">
<div class="mySlides fade">
  <img src="gal.jpg" style="width:100%">
  <div class="text">
    <h2><b style="color:">  MILK THAT GIVES LIFES</b></h2>
    <p>camel has sustained desert people for 500years-with<br>
     miracolous health benefit </p>
    <p></p>
    <p></p>

  </div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

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
  setTimeout(showSlides, 2000); // Change image every 3 seconds
}
</script>
<hr class="solid">

<div class="content">
<h2 style="text-align:center">health benefit</h2>
<p>Camel milk is an ancient health food secret! Nomadic peoples have been sustained by camel milk for over 5,000 years. </p>
<p>This desert superfood is packed with nutrients that Western cultures are only starting to realize. It's our mission to bring this health food secret to every home in the USA.</p>
 <p><button>shop now</button></p>
</div>
</div>
<hr class="solid">



<h2 style="text-align:center"><i style="color: blue;">Product</i></h2>

<div class="row">
  <div class="column" style="background-color:white;">
        <img src="14.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh100 perliters</a></p>
     <p><button>Add to Cart</button></p>
    <img src="16.jpg" style="width:70%">
    <p><a href="">@ksh100 perliters</a></p>
     <p><button>Add to Cart</button></p>
  </div>
  <div class="column" style="background-color:white;">
    <img src="15.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh100 per liters</a></p>
     <p><button>Add to Cart</button></p>
    <img src="13.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh500 per liters</a></p>
     <p><button>Add to Cart</button></p>

  </div>
  <div class="column" style="background-color:white;">
    <img src="17.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh200 per liters</a></p>
     <p><button>Add to Cart</button></p>
    <img src="18.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh500 per liters</a></p>
    
  </div>
  <div class="column" style="background-color:white;">
    <img src="17.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh200 per liters</a></p>
     <p><button>Add to Cart</button></p>
    <img src="18.jpg" style="width:70%">
    <p><a href="http://localhost/CAMEL_PROJECT/prodct.php">@ksh500 per liters</a></p>
    
  </div>
</div>
<script >
  
</script>
<hr class="solid">



<div class="content">
<h2 style="text-align:center"><i style="color: blue;">why camel milk?</i></h2>
<div class="row">
  <div class="column" style="background-color:white;">
      <h2 style="color:red;">camel milk is</h2>
        <p>Low in Lactose and casein.</p>
        
  </div>
  <div class="column" style="background-color:white;">
    <h2>cow milk</h2>
    <p>Some text..</p>
  </div>
</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
.select-selected {
  background-color: DodgerBlue;
}
</script>
<hr class="solid">
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
</div>
<hr class="solid">

<div class="header">
  <h2>Blog Name</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    
    
<div class="footer">
  <h2>Footer</h2>
</div>
  </div>

  

</div>
</body>
</html>
