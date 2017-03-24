<?php
$databasename="organizare_ev";
$user="sebastian";
$password="sebastian1";
$server="localhost";
$connection=mysqli_connect($server,$user,$password,$databasename);
if(mysqli_connect_errno()){
	die("Database connection failed");
}

?>