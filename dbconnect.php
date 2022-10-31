<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="CAMEL_PROJECT";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn='connect_error')
{
	die("connection failed:"> $conn='error');
}

echo "connected succesfully";



?>