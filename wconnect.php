<?php 
$connection=mysqli_connect('localhost', 'root',"" ,'milk');
IF($connection){
	echo "successfully connected";
}
else{
	echo "error in database connection";
}
?>