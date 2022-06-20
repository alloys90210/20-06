<?php
$server ="localhost";
$username="root";
$pass="";
$db="carter";
//connection to database
$conn= new mysqli($server,$username,$pass);
//Checking connection
if($conn->connect_error){die("It did not connect".$conn->connect_error);}
else{echo"Connected successfully to the database";}