<!DOCTYPE html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: white;
  color: black;
}

#navbar a.{
  background-color: #04AA6D;
  color: white;
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
.navbar-right {
  float: right;
}


*{
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 50px;
  height: 400px; /* Should be removed. Only for demonstration */
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
  height: 400px; /* Should be removed. Only for demonstration */
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 50px;
  height: 1000px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
   position: ;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: white;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: white;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
.image{
  text-align: center;

}
.button {
  background-color: green;
  border: none;
  padding: 15px 32px;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  width: 50%;
  font-size: 30px;
  display: inline-block;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.footer{
  display: inline-block;
  padding: ;
  width: 100;
  
}
.footer-right{
  float: right;
}
.footer-center{
  float: center;
}
.footer-left{
  float: left;
}



</style>
</head>
<body>
<div id="navbar">
  <a href="http://localhost/store/">Shop</a>
    <a href="active">Health Benefit</a>
   <a href="active">About</a>
    <a href="http://localhost/CAMEL_PROJECT/pesa.php">Blog</a>
  <div class="navbar-right">
    <a href="http://localhost/Camelmilk/login.php">ORDER MILK</a>

   
  </div>
</div>
<div class="content">
<div class="image">
  <img src="gal.jpg" style="width:100%">
  <div class="text">
    <h2><b style="color:blue">camel milk managmement </b></h2>
    <p>camel has sustained desert people for 500years-with<br>
     miracolous health benefit </p>
    <p></p>
    <p></p>

  </div>
</div>

<div class="content">
<hr class="solid">

<div class="content">
<h2 style="text-align:center"><i style="color:blue" >health benefit</i></h2>
<div class="slideshow-container">
<div class="mySlides">
  <q>Camel Milk is the closest animal dairy to human mother's milk. Rich in immune-boosting lactoferrin and immunoglobulins, and low-lactose!

</q>
  <p class="author">- </p>
</div>

<div class="mySlides">
  <q>High mineral and immunoglobulin content: Immunoglobulin is a powerful anti-body that strengthens the immune system..</q>
  <p class="author"></p>
</div>
<div class="mySlides">
  <q>Rich in protective proteins, mainly enzymes; these include immunoglobulins, lysozymes, lactoferrin, lactoperoxidase, N-acetyl-glucosaminidase (NAGase), and peptidoglycan recognition protein (PGRP), which are crucial to a strong immune system. </q>
  <p class="author"></p>
</div>

<div class="mySlides">
  <q>Nutritionally more similar to breast milk than any other dairy milk!</q>
  <p class="author"></p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



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
}
</script>




<hr class="solid">
<div class="content">
<h2 style="text-align:center"><i style="color: blue;">why camel milk?</i></h2>

<div class="table">
  <table>
  <tr>
    <th>comparison</th>
    <th>Camel</th>
    <th>Cow</th>
  </tr>
  <tr>
    <td>Easy to digest</td>
    <td>yes</td>
    <td>yes</td>
     </tr>
     <tr>
    <td>Low in fat</td>
    <td>yes</td>
    <td>yes</td>
     </tr>
   <tr>
    <td>Low in Lactose and casein.</td>
    <td>yes</td>
    <td>yes</td>
     </tr>
  <tr>
    <td>High in Antioxidant C and E.</td>
    <td>yes</td>
    <td>no</td>
     </tr>
  <tr>
    <td>Great source of an insulin-like protein.</td>
    <td>yes</td>
    <td>no</td>
    </tr>
  <tr>
    <td>Low in fat and easy to digest (2-3% fat)</td>
    <td>yes</td>
    <td>no</td>
      </tr>
  <tr>
    <td>immune boosting</td>
    <td>yes</td>
    <td>no</td>
  </tr>
</table>
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

<div class="content">
<h3 style="text-align:center"><i style="color:blue" >TESTIMONIALS</i></h3>
<div class="slideshow-container">
<div class="mySlides">
  <q>This camel milk is delicious and has been alive saver for our family

</q>
  <p class="author">LAUREN F </p>
</div>

<div class="mySlides">
  <q>This camel milk far exceeded my expectation.I have tried camel milk from other companies,and this one is my favorite.it very nourishing and a great source of calcium</q>
  <p class="author">E.G</p>
</div>
<div class="mySlides">
  <q>The camel milk tastes better than cows milk.it is eas to digest.i will always be buying from here </q>
  <p class="author">YUSSSUF</p>
</div>

<div class="mySlides">
  <q>We have been using camel milk for a months now,This campany is great,and we get the right service.The people are nice to deal with</q>
  <p class="author">HABIBA</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<hr class="solid">
<div class="content">
           <div class="container" style="width:100%;">  
                <h3 align="center"><b style="color:blue">Product</b></h3><br />  
                
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/cart.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="26.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="" />  
                               <input type="hidden" name="hidden_price" value="" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"  value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="16.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="17.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="18.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <br>
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="15.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <br>
                <div class="col-md-4">  
                     <form method="post" action="http://localhost/store/login.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="14.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"></h4>  
                               <h4 class="text-danger"></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  


                <script type="text/javascript">
                  

                </script>
                <div class="footer">
                  
                </div>

<hr class="solid">
<div class="content">
  <div class="footer">
    
  </div>
               
    
</body>
</html>
