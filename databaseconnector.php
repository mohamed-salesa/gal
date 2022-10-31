<<?php 
$connection=mysqli_connect('localhost', 'root',"" ,'form');
IF($connection){
	echo "successfully connected";
}
else{
	echo "error in database connection";
}


 ?>