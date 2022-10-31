<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>camel milk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	*{
	margin: 0;
	padding:0 ;
	font-family: century gothic;
}
.nav{
	padding: 50;
	background-color: green;
	list-style: none;
	align-content: space-between;
	align-items: right;



}

body{
	background-image:url(ro.jpg);
	height: 100vh;
	background-size: ;
	background-position: ;
}
ul{
	float: right;
	list-style-type: none;
    margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: black;
	padding: 5px 20px;
	border: 1px solid transparent;
    transition: 0.6 ease;
}
ul li a:hover{
	background-color: green;
	color: blue;
}
ul li.active a{
	background-color: green;
	color: blue;
}


main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: blue;
	font-size: 70px;

}
.button{
	position: absolute;
	top: 63%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn{
	border: 1px solid black;
	padding: 10px 30px;
	color: white;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: green;
	color: white;

}

	border-radius: 3px 0 0 3px;
}  .slideshow-container{
	max-width: 1000px;
	position: relative;
	margin: auto;
}
/*hide the images by default */
.mySlides{
	display: none;
}
/*Next and previous buttons */
.prev, .next{
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	margin-top: -22px;
	padding: 16px;

}
.post{
	position: left;
}


</style>
<body> 



	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">home</a></li>
				<li><a href="http://localhost/CAMEL_PROJECT/search.php">search</a></li>
				<li><a href="http://localhost/CAMEL_PROJECT/slideimage.php">gallary</a></li>
				<li><a href="http://localhost/CAMEL_PROJECT/login.php">login</a></li>
				<li><a href="http://localhost/CAMEL_PROJECT/Register_Form.php#">Register</a></li>
				
			</ul>
		</div>


			<div class="title">
			<h1><a href="http://localhost/CAMEL_PROJECT/site/camel.php">Camel milk</a></h1>
			
		</div>

		
			
		
		  
</body>
</html>